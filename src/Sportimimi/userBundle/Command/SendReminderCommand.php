<?php
namespace Sportimimi\userBundle\Command;
 
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
 use Doctrine\ORM\Query\ResultSetMapping;
 
class SendReminderCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('sportimimi:SendReminder')
            ->setDescription('Command description')
            ->addArgument('my_argument', InputArgument::OPTIONAL, 'Argument description');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $repository = $this->getContainer()->get('doctrine')->getRepository('SportimimiuserBundle:User');
		//$user = $repository->findOneById(23);
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('Sportimimi\userBundle\Entity\User', 't');
		$rsm->addFieldResult('t', 'id', 'id');
		$rsm->addFieldResult('t', 'email', 'email');
		$query = $this->getContainer()->get('doctrine')->getEntityManager()->createNativeQuery('
			SELECT id,email,last_login 
			FROM fos_user 
			WHERE  (TIMESTAMPDIFF(DAY, last_login, CURRENT_DATE) > 7 OR last_login IS NULL) AND newsletter != 0', $rsm);
		$users = $query->getArrayResult();
		$email ='';
		
		foreach($users as $user)
		{
			$userO = $repository->findOneById($user['id']);
			//echo $user['email'];
			$message = \Swift_Message::newInstance()
				->setSubject('Đã lâu không thấy bạn ghé thăm trên Teamsport.vn')
				->setFrom(array('admin@teamsport.vn' => 'Teamsport.vn'))
				->setTo($user['email'])
				->setContentType("text/html")
				->setBody(
					$this->getContainer()->get('templating')->render(
					'SportimimiuserBundle:Mail:reminder.html.twig',
					array('user' => $userO)
					)
					)
					;
					$this->getContainer()->get('mailer')->send($message);
					$spool = $this->getContainer()->get('mailer')->getTransport()->getSpool();
					$transport = $this->getContainer()->get('swiftmailer.transport.real');
					$spool->flushQueue($transport);

		}
  }
}