<?php
namespace Sportimimi\userBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use RMS\PushNotificationsBundle\Message\AndroidMessage;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Httpfoundation\Request;

class PushNotificationController extends Controller {

	public function pushAction()
	{
		/*$message = new AndroidMessage();
		$message->setGCM(true);
		$message->setMessage('Oh my god! A push notification!');
        $message->setDeviceIdentifier($_GET['regId']);

        $this->container->get('rms_push_notifications')->send($message);

        return new Response('Push notification send!');	*/
        // this is faster... or not..
        $url = 'https://android.googleapis.com/gcm/send';
        $registrationIDs = array( $_GET['regId']);
         $message = array("Notice" => "test");
         $fields = array(
             'registration_ids' => $registrationIDs,
             'data' => $message,
         );
   
         $headers = array(
             'Authorization: key=AIzaSyC4vEFy518e1IE_lKSvSxRxtKzdXGi_H_o',
             'Content-Type: application/json'
         );
         // Open connection
         $ch = curl_init();
   
         // Set the url, number of POST vars, POST data
         curl_setopt($ch, CURLOPT_URL, $url);
   
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   
         // Disabling SSL Certificate support temporarly
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   
         curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
   
         // Execute post
         $result = curl_exec($ch);
         if ($result === FALSE) {
             die('Curl failed: ' . curl_error($ch));
         }
   
         // Close connection
         curl_close($ch);
         echo $result;
		
	}




}