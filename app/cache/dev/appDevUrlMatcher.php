<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // vi__RG__﻿Homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vi__RG__﻿Homepage');
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::indexAction',  '_locale' => 'vi',  '_route' => 'vi__RG__﻿Homepage',);
        }

        // en__RG__﻿Homepage
        if (rtrim($pathinfo, '/') === '/en') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__﻿Homepage');
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__﻿Homepage',);
        }

        // vi__RG__Contact
        if ($pathinfo === '/lien-he') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::contactAction',  '_locale' => 'vi',  '_route' => 'vi__RG__Contact',);
        }

        // en__RG__Contact
        if ($pathinfo === '/en/lien-he') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::contactAction',  '_locale' => 'en',  '_route' => 'en__RG__Contact',);
        }

        // vi__RG__About
        if ($pathinfo === '/ve-chung-toi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::aboutAction',  '_locale' => 'vi',  '_route' => 'vi__RG__About',);
        }

        // en__RG__About
        if ($pathinfo === '/en/ve-chung-toi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::aboutAction',  '_locale' => 'en',  '_route' => 'en__RG__About',);
        }

        // vi__RG__RechercheProfile
        if ($pathinfo === '/searchProfile') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::searchAction',  '_locale' => 'vi',  '_route' => 'vi__RG__RechercheProfile',);
        }

        // en__RG__RechercheProfile
        if ($pathinfo === '/en/searchProfile') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::searchAction',  '_locale' => 'en',  '_route' => 'en__RG__RechercheProfile',);
        }

        // vi__RG__ListProfile
        if ($pathinfo === '/tim-nguoi-choi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::listAction',  '_locale' => 'vi',  '_route' => 'vi__RG__ListProfile',);
        }

        // en__RG__ListProfile
        if ($pathinfo === '/en/tim-nguoi-choi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::listAction',  '_locale' => 'en',  '_route' => 'en__RG__ListProfile',);
        }

        // vi__RG__CategoryList
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__CategoryList')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::listByCategoryAction',  '_locale' => 'vi',));
        }

        // en__RG__CategoryList
        if (0 === strpos($pathinfo, '/en/category') && preg_match('#^/en/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__CategoryList')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::listByCategoryAction',  '_locale' => 'en',));
        }

        // vi__RG__AddProfile
        if ($pathinfo === '/dang-ky-ho-so') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::addAction',  '_locale' => 'vi',  '_route' => 'vi__RG__AddProfile',);
        }

        // en__RG__AddProfile
        if ($pathinfo === '/en/dang-ky-ho-so') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::addAction',  '_locale' => 'en',  '_route' => 'en__RG__AddProfile',);
        }

        // vi__RG__AddProfileStep2
        if ($pathinfo === '/dang-ky-ho-so-buoc-2') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::addStep2Action',  '_locale' => 'vi',  '_route' => 'vi__RG__AddProfileStep2',);
        }

        // en__RG__AddProfileStep2
        if ($pathinfo === '/en/dang-ky-ho-so-buoc-2') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::addStep2Action',  '_locale' => 'en',  '_route' => 'en__RG__AddProfileStep2',);
        }

        // vi__RG__DeleteProfile
        if (0 === strpos($pathinfo, '/listProfile/delete') && preg_match('#^/listProfile/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__DeleteProfile')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::deleteAction',  '_locale' => 'vi',));
        }

        // en__RG__DeleteProfile
        if (0 === strpos($pathinfo, '/en/listProfile/delete') && preg_match('#^/en/listProfile/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__DeleteProfile')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::deleteAction',  '_locale' => 'en',));
        }

        // vi__RG__DetailProfile
        if ($pathinfo === '/ho-so-cua-toi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::detailAction',  '_locale' => 'vi',  '_route' => 'vi__RG__DetailProfile',);
        }

        // en__RG__DetailProfile
        if ($pathinfo === '/en/ho-so-cua-toi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::detailAction',  '_locale' => 'en',  '_route' => 'en__RG__DetailProfile',);
        }

        // vi__RG__PhotoProfile
        if ($pathinfo === '/photoProfile') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::uploadAction',  '_locale' => 'vi',  '_route' => 'vi__RG__PhotoProfile',);
        }

        // en__RG__PhotoProfile
        if ($pathinfo === '/en/photoProfile') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::uploadAction',  '_locale' => 'en',  '_route' => 'en__RG__PhotoProfile',);
        }

        // vi__RG__UpdateProfile
        if ($pathinfo === '/cap-nhat-ho-so') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::updateAction',  '_locale' => 'vi',  '_route' => 'vi__RG__UpdateProfile',);
        }

        // en__RG__UpdateProfile
        if ($pathinfo === '/en/cap-nhat-ho-so') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::updateAction',  '_locale' => 'en',  '_route' => 'en__RG__UpdateProfile',);
        }

        // vi__RG__AddEvent
        if ($pathinfo === '/them-tao-su-kien') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\EventController::addEventAction',  '_locale' => 'vi',  '_route' => 'vi__RG__AddEvent',);
        }

        // en__RG__AddEvent
        if ($pathinfo === '/en/them-tao-su-kien') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\EventController::addEventAction',  '_locale' => 'en',  '_route' => 'en__RG__AddEvent',);
        }

        // vi__RG__ListEvent
        if ($pathinfo === '/tim-su-kien') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\EventController::listEventsAction',  '_locale' => 'vi',  '_route' => 'vi__RG__ListEvent',);
        }

        // en__RG__ListEvent
        if ($pathinfo === '/en/tim-su-kien') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\EventController::listEventsAction',  '_locale' => 'en',  '_route' => 'en__RG__ListEvent',);
        }

        // vi__RG__DetailEvent
        if (0 === strpos($pathinfo, '/su-kien') && preg_match('#^/su\\-kien(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__DetailEvent')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\EventController::detailEventAction',  'id' => 'default_slug',  '_locale' => 'vi',));
        }

        // en__RG__DetailEvent
        if (0 === strpos($pathinfo, '/en/su-kien') && preg_match('#^/en/su\\-kien(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__DetailEvent')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\EventController::detailEventAction',  'id' => 'default_slug',  '_locale' => 'en',));
        }

        // vi__RG__CreateTeam
        if ($pathinfo === '/createTeam') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::createTeamAction',  '_locale' => 'vi',  '_route' => 'vi__RG__CreateTeam',);
        }

        // en__RG__CreateTeam
        if ($pathinfo === '/en/createTeam') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::createTeamAction',  '_locale' => 'en',  '_route' => 'en__RG__CreateTeam',);
        }

        // vi__RG__ViewTeam
        if (0 === strpos($pathinfo, '/detailTeam') && preg_match('#^/detailTeam(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__ViewTeam')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::detailAction',  'name' => 'default_slug',  '_locale' => 'vi',));
        }

        // en__RG__ViewTeam
        if (0 === strpos($pathinfo, '/en/detailTeam') && preg_match('#^/en/detailTeam(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__ViewTeam')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::detailAction',  'name' => 'default_slug',  '_locale' => 'en',));
        }

        // vi__RG__AddProfileToTeam
        if ($pathinfo === '/addProfileTeam') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::addPlayerToMyTeamAction',  '_locale' => 'vi',  '_route' => 'vi__RG__AddProfileToTeam',);
        }

        // en__RG__AddProfileToTeam
        if ($pathinfo === '/en/addProfileTeam') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::addPlayerToMyTeamAction',  '_locale' => 'en',  '_route' => 'en__RG__AddProfileToTeam',);
        }

        // vi__RG__InviteMeToTeam
        if ($pathinfo === '/inviteMe') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::inviteMeToTeamAction',  '_locale' => 'vi',  '_route' => 'vi__RG__InviteMeToTeam',);
        }

        // en__RG__InviteMeToTeam
        if ($pathinfo === '/en/inviteMe') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::inviteMeToTeamAction',  '_locale' => 'en',  '_route' => 'en__RG__InviteMeToTeam',);
        }

        // vi__RG__RemoveProfileToTeam
        if ($pathinfo === '/removeProfileTeam') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::removeProfileAction',  '_locale' => 'vi',  '_route' => 'vi__RG__RemoveProfileToTeam',);
        }

        // en__RG__RemoveProfileToTeam
        if ($pathinfo === '/en/removeProfileTeam') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::removeProfileAction',  '_locale' => 'en',  '_route' => 'en__RG__RemoveProfileToTeam',);
        }

        // vi__RG__ListTeam
        if ($pathinfo === '/tim-doi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::listTeamAction',  '_locale' => 'vi',  '_route' => 'vi__RG__ListTeam',);
        }

        // en__RG__ListTeam
        if ($pathinfo === '/en/tim-doi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::listTeamAction',  '_locale' => 'en',  '_route' => 'en__RG__ListTeam',);
        }

        // vi__RG__DeleteTeam
        if ($pathinfo === '/deleteTeam') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::deleteTeamAction',  '_locale' => 'vi',  '_route' => 'vi__RG__DeleteTeam',);
        }

        // en__RG__DeleteTeam
        if ($pathinfo === '/en/deleteTeam') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::deleteTeamAction',  '_locale' => 'en',  '_route' => 'en__RG__DeleteTeam',);
        }

        // vi__RG__ChallengeTeam
        if ($pathinfo === '/challengeTeam') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::challengeTeamAction',  '_locale' => 'vi',  '_route' => 'vi__RG__ChallengeTeam',);
        }

        // en__RG__ChallengeTeam
        if ($pathinfo === '/en/challengeTeam') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::challengeTeamAction',  '_locale' => 'en',  '_route' => 'en__RG__ChallengeTeam',);
        }

        // vi__RG__ChangeNameTeam
        if ($pathinfo === '/changeName') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::changeNameAction',  '_locale' => 'vi',  '_route' => 'vi__RG__ChangeNameTeam',);
        }

        // en__RG__ChangeNameTeam
        if ($pathinfo === '/en/changeName') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::changeNameAction',  '_locale' => 'en',  '_route' => 'en__RG__ChangeNameTeam',);
        }

        // vi__RG__DetailMatch
        if (0 === strpos($pathinfo, '/tran-dau') && preg_match('#^/tran\\-dau(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__DetailMatch')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MatchController::detailAction',  'id' => NULL,  '_locale' => 'vi',));
        }

        // en__RG__DetailMatch
        if (0 === strpos($pathinfo, '/en/tran-dau') && preg_match('#^/en/tran\\-dau(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__DetailMatch')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MatchController::detailAction',  'id' => NULL,  '_locale' => 'en',));
        }

        // vi__RG__SetWinnerMatch
        if (0 === strpos($pathinfo, '/set-winner') && preg_match('#^/set\\-winner(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__SetWinnerMatch')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MatchController::setWinnerAction',  'id' => NULL,  '_locale' => 'vi',));
        }

        // en__RG__SetWinnerMatch
        if (0 === strpos($pathinfo, '/en/set-winner') && preg_match('#^/en/set\\-winner(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__SetWinnerMatch')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MatchController::setWinnerAction',  'id' => NULL,  '_locale' => 'en',));
        }

        // vi__RG__ChangePosition
        if ($pathinfo === '/changePosition') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::changePositionAction',  '_locale' => 'vi',  '_route' => 'vi__RG__ChangePosition',);
        }

        // en__RG__ChangePosition
        if ($pathinfo === '/en/changePosition') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::changePositionAction',  '_locale' => 'en',  '_route' => 'en__RG__ChangePosition',);
        }

        // vi__RG__SkillsSheet
        if ($pathinfo === '/bang-ky-nang') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\SkillsController::upgradeSkillsAction',  '_locale' => 'vi',  '_route' => 'vi__RG__SkillsSheet',);
        }

        // en__RG__SkillsSheet
        if ($pathinfo === '/en/bang-ky-nang') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\SkillsController::upgradeSkillsAction',  '_locale' => 'en',  '_route' => 'en__RG__SkillsSheet',);
        }

        // vi__RG__ImageProfile
        if ($pathinfo === '/imageProfile') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\DocumentController::ajaxUploadAction',  '_locale' => 'vi',  '_route' => 'vi__RG__ImageProfile',);
        }

        // en__RG__ImageProfile
        if ($pathinfo === '/en/imageProfile') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\DocumentController::ajaxUploadAction',  '_locale' => 'en',  '_route' => 'en__RG__ImageProfile',);
        }

        // vi__RG__Feedback
        if ($pathinfo === '/feedback') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::feedbackAction',  '_locale' => 'vi',  '_route' => 'vi__RG__Feedback',);
        }

        // en__RG__Feedback
        if ($pathinfo === '/en/feedback') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::feedbackAction',  '_locale' => 'en',  '_route' => 'en__RG__Feedback',);
        }

        // vi__RG__RegistrationComplete
        if ($pathinfo === '/dang-ky-thanh-cong') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::registrationCompleteAction',  '_locale' => 'vi',  '_route' => 'vi__RG__RegistrationComplete',);
        }

        // en__RG__RegistrationComplete
        if ($pathinfo === '/en/dang-ky-thanh-cong') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::registrationCompleteAction',  '_locale' => 'en',  '_route' => 'en__RG__RegistrationComplete',);
        }

        // vi__RG__InviteFriend
        if ($pathinfo === '/addFriend') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\FriendController::addFriendAction',  '_locale' => 'vi',  '_route' => 'vi__RG__InviteFriend',);
        }

        // en__RG__InviteFriend
        if ($pathinfo === '/en/addFriend') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\FriendController::addFriendAction',  '_locale' => 'en',  '_route' => 'en__RG__InviteFriend',);
        }

        // vi__RG__AcceptFriend
        if ($pathinfo === '/acceptFriend') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\FriendController::acceptInvitationAction',  '_locale' => 'vi',  '_route' => 'vi__RG__AcceptFriend',);
        }

        // en__RG__AcceptFriend
        if ($pathinfo === '/en/acceptFriend') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\FriendController::acceptInvitationAction',  '_locale' => 'en',  '_route' => 'en__RG__AcceptFriend',);
        }

        // vi__RG__AcceptProfileTeam
        if (0 === strpos($pathinfo, '/acceptProfileTeam') && preg_match('#^/acceptProfileTeam/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__AcceptProfileTeam')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::acceptInvitationProfileTeamAction',  '_locale' => 'vi',));
        }

        // en__RG__AcceptProfileTeam
        if (0 === strpos($pathinfo, '/en/acceptProfileTeam') && preg_match('#^/en/acceptProfileTeam/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__AcceptProfileTeam')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\TeamController::acceptInvitationProfileTeamAction',  '_locale' => 'en',));
        }

        // vi__RG__RemoveFriend
        if (0 === strpos($pathinfo, '/removeFriend') && preg_match('#^/removeFriend(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__RemoveFriend')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\FriendController::removeFriendAction',  'id' => 'default_slug',  '_locale' => 'vi',));
        }

        // en__RG__RemoveFriend
        if (0 === strpos($pathinfo, '/en/removeFriend') && preg_match('#^/en/removeFriend(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__RemoveFriend')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\FriendController::removeFriendAction',  'id' => 'default_slug',  '_locale' => 'en',));
        }

        // vi__RG__SwitchLanguage
        if ($pathinfo === '/switchLanguage') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::switchLanguageAction',  '_locale' => 'vi',  '_route' => 'vi__RG__SwitchLanguage',);
        }

        // en__RG__SwitchLanguage
        if ($pathinfo === '/en/switchLanguage') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::switchLanguageAction',  '_locale' => 'en',  '_route' => 'en__RG__SwitchLanguage',);
        }

        // vi__RG__NotificationViewed
        if ($pathinfo === '/notificationsViewed') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NotificationController::viewedAction',  '_locale' => 'vi',  '_route' => 'vi__RG__NotificationViewed',);
        }

        // en__RG__NotificationViewed
        if ($pathinfo === '/en/notificationsViewed') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NotificationController::viewedAction',  '_locale' => 'en',  '_route' => 'en__RG__NotificationViewed',);
        }

        // vi__RG__PullNotifications
        if ($pathinfo === '/pullNotifications') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NotificationController::pullNotificationsAction',  '_locale' => 'vi',  '_route' => 'vi__RG__PullNotifications',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            // en__RG__PullNotifications
            if ($pathinfo === '/en/pullNotifications') {
                return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NotificationController::pullNotificationsAction',  '_locale' => 'en',  '_route' => 'en__RG__PullNotifications',);
            }

            // vi__RG__EventImage
            if ($pathinfo === '/eventImageUpload') {
                return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\EventController::uploadImageAction',  '_locale' => 'vi',  '_route' => 'vi__RG__EventImage',);
            }

            // en__RG__EventImage
            if ($pathinfo === '/en/eventImageUpload') {
                return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\EventController::uploadImageAction',  '_locale' => 'en',  '_route' => 'en__RG__EventImage',);
            }

        }

        // vi__RG__CreateArticle
        if ($pathinfo === '/tao-bai-viet') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ArticleController::createArticleAction',  '_locale' => 'vi',  '_route' => 'vi__RG__CreateArticle',);
        }

        // en__RG__CreateArticle
        if ($pathinfo === '/en/tao-bai-viet') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ArticleController::createArticleAction',  '_locale' => 'en',  '_route' => 'en__RG__CreateArticle',);
        }

        // vi__RG__ViewArticle
        if (0 === strpos($pathinfo, '/article') && preg_match('#^/article(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__ViewArticle')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ArticleController::viewArticleAction',  'name' => 'default_slug',  '_locale' => 'vi',));
        }

        // en__RG__ViewArticle
        if (0 === strpos($pathinfo, '/en/article') && preg_match('#^/en/article(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__ViewArticle')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ArticleController::viewArticleAction',  'name' => 'default_slug',  '_locale' => 'en',));
        }

        // vi__RG__ListPlace
        if ($pathinfo === '/result-tim-cho-choi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceController::listPlaceAction',  '_locale' => 'vi',  '_route' => 'vi__RG__ListPlace',);
        }

        // en__RG__ListPlace
        if ($pathinfo === '/en/result-tim-cho-choi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceController::listPlaceAction',  '_locale' => 'en',  '_route' => 'en__RG__ListPlace',);
        }

        // vi__RG__HomepagePlace
        if ($pathinfo === '/tim-cho-choi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceController::indexAction',  '_locale' => 'vi',  '_route' => 'vi__RG__HomepagePlace',);
        }

        // en__RG__HomepagePlace
        if ($pathinfo === '/en/tim-cho-choi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__HomepagePlace',);
        }

        // vi__RG__DetailPlace
        if (0 === strpos($pathinfo, '/san') && preg_match('#^/san(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__DetailPlace')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceController::detailPlaceAction',  'name' => 'default_slug',  '_locale' => 'vi',));
        }

        // en__RG__DetailPlace
        if (0 === strpos($pathinfo, '/en/san') && preg_match('#^/en/san(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__DetailPlace')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceController::detailPlaceAction',  'name' => 'default_slug',  '_locale' => 'en',));
        }

        // vi__RG__InviteToPlay
        if ($pathinfo === '/invite-to-play') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::invitePlayAction',  '_locale' => 'vi',  '_route' => 'vi__RG__InviteToPlay',);
        }

        // en__RG__InviteToPlay
        if ($pathinfo === '/en/invite-to-play') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::invitePlayAction',  '_locale' => 'en',  '_route' => 'en__RG__InviteToPlay',);
        }

        // vi__RG__FacebookLogin
        if (rtrim($pathinfo, '/') === '/facebook') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vi__RG__FacebookLogin');
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::facebookLoginAction',  '_locale' => 'vi',  '_route' => 'vi__RG__FacebookLogin',);
        }

        // en__RG__FacebookLogin
        if (rtrim($pathinfo, '/') === '/en/facebook') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__FacebookLogin');
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::facebookLoginAction',  '_locale' => 'en',  '_route' => 'en__RG__FacebookLogin',);
        }

        // vi__RG__AddSportProfile
        if ($pathinfo === '/addSport') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::addSportAction',  '_locale' => 'vi',  '_route' => 'vi__RG__AddSportProfile',);
        }

        // en__RG__AddSportProfile
        if ($pathinfo === '/en/addSport') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::addSportAction',  '_locale' => 'en',  '_route' => 'en__RG__AddSportProfile',);
        }

        // vi__RG__AddStatus
        if ($pathinfo === '/addStatus') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsController::addStatusAction',  '_locale' => 'vi',  '_route' => 'vi__RG__AddStatus',);
        }

        // en__RG__AddStatus
        if ($pathinfo === '/en/addStatus') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsController::addStatusAction',  '_locale' => 'en',  '_route' => 'en__RG__AddStatus',);
        }

        // vi__RG__SetSearchPlayer
        if (0 === strpos($pathinfo, '/searchPlayer') && preg_match('#^/searchPlayer(?:/(?P<value>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__SetSearchPlayer')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::setSearchPlayerAction',  'value' => 0,  '_locale' => 'vi',));
        }

        // en__RG__SetSearchPlayer
        if (0 === strpos($pathinfo, '/en/searchPlayer') && preg_match('#^/en/searchPlayer(?:/(?P<value>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__SetSearchPlayer')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::setSearchPlayerAction',  'value' => 0,  '_locale' => 'en',));
        }

        // vi__RG__Administrator
        if ($pathinfo === '/private') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\AdminController::indexAction',  '_locale' => 'vi',  '_route' => 'vi__RG__Administrator',);
        }

        // en__RG__Administrator
        if ($pathinfo === '/en/private') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\AdminController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__Administrator',);
        }

        // vi__RG__DeleteUser
        if (0 === strpos($pathinfo, '/deleteUser') && preg_match('#^/deleteUser(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__DeleteUser')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\AdminController::deleteUserAction',  'id' => 'default_slug',  '_locale' => 'vi',));
        }

        if (0 === strpos($pathinfo, '/e')) {
            // en__RG__DeleteUser
            if (0 === strpos($pathinfo, '/en/deleteUser') && preg_match('#^/en/deleteUser(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__DeleteUser')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\AdminController::deleteUserAction',  'id' => 'default_slug',  '_locale' => 'en',));
            }

            // vi__RG__EditNews
            if ($pathinfo === '/editNews') {
                return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsController::editNewsAction',  '_locale' => 'vi',  '_route' => 'vi__RG__EditNews',);
            }

            // en__RG__EditNews
            if ($pathinfo === '/en/editNews') {
                return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsController::editNewsAction',  '_locale' => 'en',  '_route' => 'en__RG__EditNews',);
            }

        }

        // vi__RG__DeleteNews
        if (0 === strpos($pathinfo, '/deleteNews') && preg_match('#^/deleteNews(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__DeleteNews')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsController::deleteNewsAction',  'id' => 'default_slug',  '_locale' => 'vi',));
        }

        // en__RG__DeleteNews
        if (0 === strpos($pathinfo, '/en/deleteNews') && preg_match('#^/en/deleteNews(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__DeleteNews')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsController::deleteNewsAction',  'id' => 'default_slug',  '_locale' => 'en',));
        }

        // vi__RG__LoadMore
        if ($pathinfo === '/loadMore') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::loadMoreAction',  '_locale' => 'vi',  '_route' => 'vi__RG__LoadMore',);
        }

        // en__RG__LoadMore
        if ($pathinfo === '/en/loadMore') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::loadMoreAction',  '_locale' => 'en',  '_route' => 'en__RG__LoadMore',);
        }

        // vi__RG__DynamicMessageChat
        if ($pathinfo === '/loadChat') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::baseMessageAction',  '_locale' => 'vi',  '_route' => 'vi__RG__DynamicMessageChat',);
        }

        // en__RG__DynamicMessageChat
        if ($pathinfo === '/en/loadChat') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::baseMessageAction',  '_locale' => 'en',  '_route' => 'en__RG__DynamicMessageChat',);
        }

        // vi__RG__AddProfileToEvent
        if ($pathinfo === '/addEventProfile') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\EventController::addProfileEventAction',  '_locale' => 'vi',  '_route' => 'vi__RG__AddProfileToEvent',);
        }

        // en__RG__AddProfileToEvent
        if ($pathinfo === '/en/addEventProfile') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\EventController::addProfileEventAction',  '_locale' => 'en',  '_route' => 'en__RG__AddProfileToEvent',);
        }

        // vi__RG__DeleteProfileToEvent
        if ($pathinfo === '/deleteEventProfile') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\EventController::deleteProfileEventAction',  '_locale' => 'vi',  '_route' => 'vi__RG__DeleteProfileToEvent',);
        }

        // en__RG__DeleteProfileToEvent
        if ($pathinfo === '/en/deleteEventProfile') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\EventController::deleteProfileEventAction',  '_locale' => 'en',  '_route' => 'en__RG__DeleteProfileToEvent',);
        }

        // vi__RG__CreatePlace
        if ($pathinfo === '/tao-san-moi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceController::createPlaceAction',  '_locale' => 'vi',  '_route' => 'vi__RG__CreatePlace',);
        }

        // en__RG__CreatePlace
        if ($pathinfo === '/en/tao-san-moi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceController::createPlaceAction',  '_locale' => 'en',  '_route' => 'en__RG__CreatePlace',);
        }

        // vi__RG__CurrentlyPlaceHere
        if ($pathinfo === '/currently-play-here') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceController::currentlyPlayHereAction',  '_locale' => 'vi',  '_route' => 'vi__RG__CurrentlyPlaceHere',);
        }

        // en__RG__CurrentlyPlaceHere
        if ($pathinfo === '/en/currently-play-here') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceController::currentlyPlayHereAction',  '_locale' => 'en',  '_route' => 'en__RG__CurrentlyPlaceHere',);
        }

        // vi__RG__Participate
        if ($pathinfo === '/participate') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsController::participateAction',  '_locale' => 'vi',  '_route' => 'vi__RG__Participate',);
        }

        // en__RG__Participate
        if ($pathinfo === '/en/participate') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsController::participateAction',  '_locale' => 'en',  '_route' => 'en__RG__Participate',);
        }

        // vi__RG__RemoveParticipate
        if ($pathinfo === '/participateRemove') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsController::noParticipateAction',  '_locale' => 'vi',  '_route' => 'vi__RG__RemoveParticipate',);
        }

        // en__RG__RemoveParticipate
        if ($pathinfo === '/en/participateRemove') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsController::noParticipateAction',  '_locale' => 'en',  '_route' => 'en__RG__RemoveParticipate',);
        }

        // vi__RG__NotificationViewAll
        if ($pathinfo === '/notifications') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NotificationController::viewAllAction',  '_locale' => 'vi',  '_route' => 'vi__RG__NotificationViewAll',);
        }

        // en__RG__NotificationViewAll
        if ($pathinfo === '/en/notifications') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NotificationController::viewAllAction',  '_locale' => 'en',  '_route' => 'en__RG__NotificationViewAll',);
        }

        // vi__RG__AddComment
        if ($pathinfo === '/addComment') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\CommentController::addAction',  '_locale' => 'vi',  '_route' => 'vi__RG__AddComment',);
        }

        // en__RG__AddComment
        if ($pathinfo === '/en/addComment') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\CommentController::addAction',  '_locale' => 'en',  '_route' => 'en__RG__AddComment',);
        }

        // vi__RG__DeleteComment
        if ($pathinfo === '/deleteComment') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\CommentController::deleteAction',  '_locale' => 'vi',  '_route' => 'vi__RG__DeleteComment',);
        }

        // en__RG__DeleteComment
        if ($pathinfo === '/en/deleteComment') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\CommentController::deleteAction',  '_locale' => 'en',  '_route' => 'en__RG__DeleteComment',);
        }

        // vi__RG__Message
        if ($pathinfo === '/ho-so-cua-toi/message') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MessageController::indexAction',  '_locale' => 'vi',  '_route' => 'vi__RG__Message',);
        }

        // en__RG__Message
        if ($pathinfo === '/en/ho-so-cua-toi/message') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MessageController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__Message',);
        }

        // vi__RG__SendMessage
        if ($pathinfo === '/ho-so-cua-toi/message/moi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MessageController::addMessageAction',  '_locale' => 'vi',  '_route' => 'vi__RG__SendMessage',);
        }

        // en__RG__SendMessage
        if ($pathinfo === '/en/ho-so-cua-toi/message/moi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MessageController::addMessageAction',  '_locale' => 'en',  '_route' => 'en__RG__SendMessage',);
        }

        // vi__RG__LoadReply
        if ($pathinfo === '/ho-so-cua-toi/message/loadReply') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MessageController::listMessageReplyAction',  '_locale' => 'vi',  '_route' => 'vi__RG__LoadReply',);
        }

        // en__RG__LoadReply
        if ($pathinfo === '/en/ho-so-cua-toi/message/loadReply') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MessageController::listMessageReplyAction',  '_locale' => 'en',  '_route' => 'en__RG__LoadReply',);
        }

        // vi__RG__ReplyMessage
        if ($pathinfo === '/replyMessage') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MessageController::replyConversationAction',  '_locale' => 'vi',  '_route' => 'vi__RG__ReplyMessage',);
        }

        // en__RG__ReplyMessage
        if ($pathinfo === '/en/replyMessage') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MessageController::replyConversationAction',  '_locale' => 'en',  '_route' => 'en__RG__ReplyMessage',);
        }

        // vi__RG__SendSms
        if ($pathinfo === '/sendSms') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::sendSmsAlertAction',  '_locale' => 'vi',  '_route' => 'vi__RG__SendSms',);
        }

        // en__RG__SendSms
        if ($pathinfo === '/en/sendSms') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::sendSmsAlertAction',  '_locale' => 'en',  '_route' => 'en__RG__SendSms',);
        }

        // vi__RG__ProfileListJson
        if ($pathinfo === '/profileListJson') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::profileListJsonAction',  '_locale' => 'vi',  '_route' => 'vi__RG__ProfileListJson',);
        }

        // en__RG__ProfileListJson
        if ($pathinfo === '/en/profileListJson') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::profileListJsonAction',  '_locale' => 'en',  '_route' => 'en__RG__ProfileListJson',);
        }

        // vi__RG__SportsListJson
        if ($pathinfo === '/sportsListJson') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::sportsListJsonAction',  '_locale' => 'vi',  '_route' => 'vi__RG__SportsListJson',);
        }

        // en__RG__SportsListJson
        if ($pathinfo === '/en/sportsListJson') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::sportsListJsonAction',  '_locale' => 'en',  '_route' => 'en__RG__SportsListJson',);
        }

        // vi__RG__PlaceListJson
        if ($pathinfo === '/placeListJson') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceController::placeListJsonAction',  '_locale' => 'vi',  '_route' => 'vi__RG__PlaceListJson',);
        }

        // en__RG__PlaceListJson
        if ($pathinfo === '/en/placeListJson') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceController::placeListJsonAction',  '_locale' => 'en',  '_route' => 'en__RG__PlaceListJson',);
        }

        if (0 === strpos($pathinfo, '/media/cache')) {
            if (0 === strpos($pathinfo, '/media/cache/my_thumb')) {
                // _imagine_my_thumb
                if (preg_match('#^/media/cache/my_thumb/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_my_thumb;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_my_thumb')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'my_thumb',));
                }
                not__imagine_my_thumb:

                if (0 === strpos($pathinfo, '/media/cache/my_thumb_')) {
                    // _imagine_my_thumb_80
                    if (0 === strpos($pathinfo, '/media/cache/my_thumb_80') && preg_match('#^/media/cache/my_thumb_80/(?P<path>.+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not__imagine_my_thumb_80;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_my_thumb_80')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'my_thumb_80',));
                    }
                    not__imagine_my_thumb_80:

                    // _imagine_my_thumb_60
                    if (0 === strpos($pathinfo, '/media/cache/my_thumb_60') && preg_match('#^/media/cache/my_thumb_60/(?P<path>.+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not__imagine_my_thumb_60;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_my_thumb_60')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'my_thumb_60',));
                    }
                    not__imagine_my_thumb_60:

                    if (0 === strpos($pathinfo, '/media/cache/my_thumb_2')) {
                        // _imagine_my_thumb_25
                        if (0 === strpos($pathinfo, '/media/cache/my_thumb_25') && preg_match('#^/media/cache/my_thumb_25/(?P<path>.+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not__imagine_my_thumb_25;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_my_thumb_25')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'my_thumb_25',));
                        }
                        not__imagine_my_thumb_25:

                        // _imagine_my_thumb_200
                        if (0 === strpos($pathinfo, '/media/cache/my_thumb_200') && preg_match('#^/media/cache/my_thumb_200/(?P<path>.+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not__imagine_my_thumb_200;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_my_thumb_200')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'my_thumb_200',));
                        }
                        not__imagine_my_thumb_200:

                    }

                }

            }

            // _imagine_logo_top
            if (0 === strpos($pathinfo, '/media/cache/logo_top') && preg_match('#^/media/cache/logo_top/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_logo_top;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_logo_top')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'logo_top',));
            }
            not__imagine_logo_top:

        }

        // vi__RG__PaymentIndex
        if ($pathinfo === '/premium') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PaymentController::indexAction',  '_locale' => 'vi',  '_route' => 'vi__RG__PaymentIndex',);
        }

        // en__RG__PaymentIndex
        if ($pathinfo === '/en/premium') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PaymentController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__PaymentIndex',);
        }

        // vi__RG__payment_complete
        if ($pathinfo === '/paymentComplete') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PaymentController::completeAction',  '_locale' => 'vi',  '_route' => 'vi__RG__payment_complete',);
        }

        // en__RG__payment_complete
        if ($pathinfo === '/en/paymentComplete') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PaymentController::completeAction',  '_locale' => 'en',  '_route' => 'en__RG__payment_complete',);
        }

        // vi__RG__payment_cancel
        if ($pathinfo === '/paymentCancel') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PaymentController::cancelAction',  '_locale' => 'vi',  '_route' => 'vi__RG__payment_cancel',);
        }

        // en__RG__payment_cancel
        if ($pathinfo === '/en/paymentCancel') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PaymentController::cancelAction',  '_locale' => 'en',  '_route' => 'en__RG__payment_cancel',);
        }

        // vi__RG__UsersOnline
        if ($pathinfo === '/usersOnline') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::getAllProfileOnlineAction',  '_locale' => 'vi',  '_route' => 'vi__RG__UsersOnline',);
        }

        // en__RG__UsersOnline
        if ($pathinfo === '/en/usersOnline') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::getAllProfileOnlineAction',  '_locale' => 'en',  '_route' => 'en__RG__UsersOnline',);
        }

        // vi__RG__Pricing
        if ($pathinfo === '/pricing') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::pricingIndexAction',  '_locale' => 'vi',  '_route' => 'vi__RG__Pricing',);
        }

        // en__RG__Pricing
        if ($pathinfo === '/en/pricing') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::pricingIndexAction',  '_locale' => 'en',  '_route' => 'en__RG__Pricing',);
        }

        // vi__RG__MapFields
        if ($pathinfo === '/map/fields') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MapController::currentAction',  '_locale' => 'vi',  '_route' => 'vi__RG__MapFields',);
        }

        // en__RG__MapFields
        if ($pathinfo === '/en/map/fields') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MapController::currentAction',  '_locale' => 'en',  '_route' => 'en__RG__MapFields',);
        }

        // vi__RG__MapCurrentlyPlay
        if ($pathinfo === '/map/nguoi-dang-choi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MapController::currentPlayAction',  '_locale' => 'vi',  '_route' => 'vi__RG__MapCurrentlyPlay',);
        }

        // en__RG__MapCurrentlyPlay
        if ($pathinfo === '/en/map/nguoi-dang-choi') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MapController::currentPlayAction',  '_locale' => 'en',  '_route' => 'en__RG__MapCurrentlyPlay',);
        }

        // vi__RG__AllPlayersPlaying
        if ($pathinfo === '/markers') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MapController::allPlayersPlayingAction',  '_locale' => 'vi',  '_route' => 'vi__RG__AllPlayersPlaying',);
        }

        // en__RG__AllPlayersPlaying
        if ($pathinfo === '/en/markers') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MapController::allPlayersPlayingAction',  '_locale' => 'en',  '_route' => 'en__RG__AllPlayersPlaying',);
        }

        // vi__RG__AllFields
        if ($pathinfo === '/markers-field') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MapController::allFieldsAction',  '_locale' => 'vi',  '_route' => 'vi__RG__AllFields',);
        }

        // en__RG__AllFields
        if ($pathinfo === '/en/markers-field') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\MapController::allFieldsAction',  '_locale' => 'en',  '_route' => 'en__RG__AllFields',);
        }

        // vi__RG__Privacy
        if ($pathinfo === '/privacy-policy') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::privacyAction',  '_locale' => 'vi',  '_route' => 'vi__RG__Privacy',);
        }

        // en__RG__Privacy
        if ($pathinfo === '/en/privacy-policy') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::privacyAction',  '_locale' => 'en',  '_route' => 'en__RG__Privacy',);
        }

        // vi__RG__PushNotification
        if ($pathinfo === '/push-notification') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PushNotificationController::pushAction',  '_locale' => 'vi',  '_route' => 'vi__RG__PushNotification',);
        }

        // en__RG__PushNotification
        if ($pathinfo === '/en/push-notification') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PushNotificationController::pushAction',  '_locale' => 'en',  '_route' => 'en__RG__PushNotification',);
        }

        // vi__RG__homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vi__RG__homepage');
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::indexAction',  '_locale' => 'vi',  '_route' => 'vi__RG__homepage',);
        }

        // en__RG__homepage
        if (rtrim($pathinfo, '/') === '/en') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__homepage');
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PageController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__homepage',);
        }

        // vi__RG__fos_user_security_check
        if ($pathinfo === '/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_vi__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_security_check',);
        }
        not_vi__RG__fos_user_security_check:

        // en__RG__fos_user_security_check
        if ($pathinfo === '/en/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_check',);
        }
        not_en__RG__fos_user_security_check:

        // vi__RG__fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_security_logout',);
        }

        // en__RG__fos_user_security_logout
        if ($pathinfo === '/en/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_logout',);
        }

        // vi__RG__fos_user_profile_show
        if (rtrim($pathinfo, '/') === '/profile') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vi__RG__fos_user_profile_show');
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::showAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_profile_show',);
        }
        not_vi__RG__fos_user_profile_show:

        // en__RG__fos_user_profile_show
        if (rtrim($pathinfo, '/') === '/en/profile') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__fos_user_profile_show');
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::showAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_profile_show',);
        }
        not_en__RG__fos_user_profile_show:

        // vi__RG__fos_user_profile_edit
        if ($pathinfo === '/profile/edit') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::editAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_profile_edit',);
        }

        // en__RG__fos_user_profile_edit
        if ($pathinfo === '/en/profile/edit') {
            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfileController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_profile_edit',);
        }

        // vi__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/inscription') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vi__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_registration_register',);
        }

        // en__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/en/inscription') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_register',);
        }

        // vi__RG__fos_user_registration_check_email
        if ($pathinfo === '/inscription/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_registration_check_email',);
        }
        not_vi__RG__fos_user_registration_check_email:

        // en__RG__fos_user_registration_check_email
        if ($pathinfo === '/en/inscription/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_check_email',);
        }
        not_en__RG__fos_user_registration_check_email:

        // vi__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/inscription/confirm') && preg_match('#^/inscription/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'vi',));
        }
        not_vi__RG__fos_user_registration_confirm:

        // en__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/en/inscription/confirm') && preg_match('#^/en/inscription/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_registration_confirm:

        // vi__RG__fos_user_registration_confirmed
        if ($pathinfo === '/inscription/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_registration_confirmed',);
        }
        not_vi__RG__fos_user_registration_confirmed:

        // en__RG__fos_user_registration_confirmed
        if ($pathinfo === '/en/inscription/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_confirmed',);
        }
        not_en__RG__fos_user_registration_confirmed:

        // vi__RG__fos_user_security_login
        if ($pathinfo === '/dang-nhap') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_security_login',);
        }

        // en__RG__fos_user_security_login
        if ($pathinfo === '/en/dang-nhap') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_login',);
        }

        // vi__RG__fos_user_resetting_request
        if ($pathinfo === '/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_resetting_request',);
        }
        not_vi__RG__fos_user_resetting_request:

        // en__RG__fos_user_resetting_request
        if ($pathinfo === '/en/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_request',);
        }
        not_en__RG__fos_user_resetting_request:

        // vi__RG__fos_user_resetting_send_email
        if ($pathinfo === '/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_vi__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_resetting_send_email',);
        }
        not_vi__RG__fos_user_resetting_send_email:

        // en__RG__fos_user_resetting_send_email
        if ($pathinfo === '/en/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_send_email',);
        }
        not_en__RG__fos_user_resetting_send_email:

        // vi__RG__fos_user_resetting_check_email
        if ($pathinfo === '/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_resetting_check_email',);
        }
        not_vi__RG__fos_user_resetting_check_email:

        // en__RG__fos_user_resetting_check_email
        if ($pathinfo === '/en/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_check_email',);
        }
        not_en__RG__fos_user_resetting_check_email:

        // vi__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_vi__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'vi',));
        }
        not_vi__RG__fos_user_resetting_reset:

        // en__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/en/resetting/reset') && preg_match('#^/en/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_resetting_reset:

        // vi__RG__fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_vi__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_change_password',);
        }
        not_vi__RG__fos_user_change_password:

        // en__RG__fos_user_change_password
        if ($pathinfo === '/en/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_change_password',);
        }
        not_en__RG__fos_user_change_password:

        // vi__RG__fos_user_group_list
        if ($pathinfo === '/group/list') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__fos_user_group_list;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_group_list',);
        }
        not_vi__RG__fos_user_group_list:

        // en__RG__fos_user_group_list
        if ($pathinfo === '/en/group/list') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_group_list;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_group_list',);
        }
        not_en__RG__fos_user_group_list:

        // vi__RG__fos_user_group_new
        if ($pathinfo === '/group/new') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_group_new',);
        }

        // en__RG__fos_user_group_new
        if ($pathinfo === '/en/group/new') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_group_new',);
        }

        // vi__RG__fos_user_group_show
        if (0 === strpos($pathinfo, '/group') && preg_match('#^/group/(?P<groupname>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__fos_user_group_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',  '_locale' => 'vi',));
        }
        not_vi__RG__fos_user_group_show:

        // en__RG__fos_user_group_show
        if (0 === strpos($pathinfo, '/en/group') && preg_match('#^/en/group/(?P<groupname>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_group_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_group_show:

        // vi__RG__fos_user_group_edit
        if (0 === strpos($pathinfo, '/group') && preg_match('#^/group/(?P<groupname>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',  '_locale' => 'vi',));
        }

        // en__RG__fos_user_group_edit
        if (0 === strpos($pathinfo, '/en/group') && preg_match('#^/en/group/(?P<groupname>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',  '_locale' => 'en',));
        }

        // vi__RG__fos_user_group_delete
        if (0 === strpos($pathinfo, '/group') && preg_match('#^/group/(?P<groupname>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__fos_user_group_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',  '_locale' => 'vi',));
        }
        not_vi__RG__fos_user_group_delete:

        // en__RG__fos_user_group_delete
        if (0 === strpos($pathinfo, '/en/group') && preg_match('#^/en/group/(?P<groupname>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_group_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_group_delete:

        // vi__RG__api_get_user
        if (0 === strpos($pathinfo, '/api/users') && preg_match('#^/api/users/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__api_get_user;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__api_get_user')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\UserRestController::getUserAction',  '_format' => 'json',  '_locale' => 'vi',));
        }
        not_vi__RG__api_get_user:

        // en__RG__api_get_user
        if (0 === strpos($pathinfo, '/en/api/users') && preg_match('#^/en/api/users/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__api_get_user;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__api_get_user')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\UserRestController::getUserAction',  '_format' => 'json',  '_locale' => 'en',));
        }
        not_en__RG__api_get_user:

        // vi__RG__api_get_me
        if ($pathinfo === '/api/me') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__api_get_me;
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\UserRestController::getMeAction',  '_format' => 'json',  '_locale' => 'vi',  '_route' => 'vi__RG__api_get_me',);
        }
        not_vi__RG__api_get_me:

        // en__RG__api_get_me
        if ($pathinfo === '/en/api/me') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__api_get_me;
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\UserRestController::getMeAction',  '_format' => 'json',  '_locale' => 'en',  '_route' => 'en__RG__api_get_me',);
        }
        not_en__RG__api_get_me:

        // vi__RG__api_get_news
        if ($pathinfo === '/api/news') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__api_get_news;
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsRestController::getNewsAction',  '_format' => 'json',  '_locale' => 'vi',  '_route' => 'vi__RG__api_get_news',);
        }
        not_vi__RG__api_get_news:

        // en__RG__api_get_news
        if ($pathinfo === '/en/api/news') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__api_get_news;
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsRestController::getNewsAction',  '_format' => 'json',  '_locale' => 'en',  '_route' => 'en__RG__api_get_news',);
        }
        not_en__RG__api_get_news:

        // vi__RG__api_post_news
        if ($pathinfo === '/api/news') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_vi__RG__api_post_news;
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsRestController::postNewsAction',  '_format' => 'json',  '_locale' => 'vi',  '_route' => 'vi__RG__api_post_news',);
        }
        not_vi__RG__api_post_news:

        // en__RG__api_post_news
        if ($pathinfo === '/en/api/news') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__api_post_news;
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NewsRestController::postNewsAction',  '_format' => 'json',  '_locale' => 'en',  '_route' => 'en__RG__api_post_news',);
        }
        not_en__RG__api_post_news:

        // vi__RG__api_get_profiles
        if ($pathinfo === '/api/profiles') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__api_get_profiles;
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfilesRestController::getProfilesAction',  '_format' => 'json',  '_locale' => 'vi',  '_route' => 'vi__RG__api_get_profiles',);
        }
        not_vi__RG__api_get_profiles:

        // en__RG__api_get_profiles
        if ($pathinfo === '/en/api/profiles') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__api_get_profiles;
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfilesRestController::getProfilesAction',  '_format' => 'json',  '_locale' => 'en',  '_route' => 'en__RG__api_get_profiles',);
        }
        not_en__RG__api_get_profiles:

        // vi__RG__api_get_profile
        if (0 === strpos($pathinfo, '/api/profiles') && preg_match('#^/api/profiles/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__api_get_profile;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__api_get_profile')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfilesRestController::getProfileAction',  '_format' => 'json',  '_locale' => 'vi',));
        }
        not_vi__RG__api_get_profile:

        // en__RG__api_get_profile
        if (0 === strpos($pathinfo, '/en/api/profiles') && preg_match('#^/en/api/profiles/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__api_get_profile;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__api_get_profile')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfilesRestController::getProfileAction',  '_format' => 'json',  '_locale' => 'en',));
        }
        not_en__RG__api_get_profile:

        // vi__RG__api_get_profile_notifications
        if (0 === strpos($pathinfo, '/api/profiles') && preg_match('#^/api/profiles/(?P<slug>[^/]++)/notifications$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__api_get_profile_notifications;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__api_get_profile_notifications')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfilesRestController::getProfileNotificationsAction',  '_format' => 'json',  '_locale' => 'vi',));
        }
        not_vi__RG__api_get_profile_notifications:

        // en__RG__api_get_profile_notifications
        if (0 === strpos($pathinfo, '/en/api/profiles') && preg_match('#^/en/api/profiles/(?P<slug>[^/]++)/notifications$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__api_get_profile_notifications;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__api_get_profile_notifications')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfilesRestController::getProfileNotificationsAction',  '_format' => 'json',  '_locale' => 'en',));
        }
        not_en__RG__api_get_profile_notifications:

        // vi__RG__api_get_profile_message
        if (0 === strpos($pathinfo, '/api/profiles') && preg_match('#^/api/profiles/(?P<slug>[^/]++)/message$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__api_get_profile_message;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__api_get_profile_message')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfilesRestController::getProfileMessageAction',  '_format' => 'json',  '_locale' => 'vi',));
        }
        not_vi__RG__api_get_profile_message:

        // en__RG__api_get_profile_message
        if (0 === strpos($pathinfo, '/en/api/profiles') && preg_match('#^/en/api/profiles/(?P<slug>[^/]++)/message$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__api_get_profile_message;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__api_get_profile_message')), array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\ProfilesRestController::getProfileMessageAction',  '_format' => 'json',  '_locale' => 'en',));
        }
        not_en__RG__api_get_profile_message:

        // vi__RG__api_get_notifications
        if ($pathinfo === '/api/notifications') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__api_get_notifications;
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NotificationsRestController::getNotificationsAction',  '_format' => 'json',  '_locale' => 'vi',  '_route' => 'vi__RG__api_get_notifications',);
        }
        not_vi__RG__api_get_notifications:

        // en__RG__api_get_notifications
        if ($pathinfo === '/en/api/notifications') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__api_get_notifications;
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\NotificationsRestController::getNotificationsAction',  '_format' => 'json',  '_locale' => 'en',  '_route' => 'en__RG__api_get_notifications',);
        }
        not_en__RG__api_get_notifications:

        // vi__RG__api_get_place
        if ($pathinfo === '/api/place') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__api_get_place;
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceRestController::getPlaceAction',  '_format' => 'json',  '_locale' => 'vi',  '_route' => 'vi__RG__api_get_place',);
        }
        not_vi__RG__api_get_place:

        // en__RG__api_get_place
        if ($pathinfo === '/en/api/place') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__api_get_place;
            }

            return array (  '_controller' => 'Sportimimi\\userBundle\\Controller\\PlaceRestController::getPlaceAction',  '_format' => 'json',  '_locale' => 'en',  '_route' => 'en__RG__api_get_place',);
        }
        not_en__RG__api_get_place:

        // vi__RG__fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',  '_locale' => 'vi',));
        }

        // en__RG__fos_js_routing_js
        if (0 === strpos($pathinfo, '/en/js/routing') && preg_match('#^/en/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',  '_locale' => 'en',));
        }

        // vi__RG__fos_oauth_server_token
        if ($pathinfo === '/oauth/v2/token') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_vi__RG__fos_oauth_server_token;
            }

            return array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_oauth_server_token',);
        }
        not_vi__RG__fos_oauth_server_token:

        // en__RG__fos_oauth_server_token
        if ($pathinfo === '/en/oauth/v2/token') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_oauth_server_token;
            }

            return array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_oauth_server_token',);
        }
        not_en__RG__fos_oauth_server_token:

        // vi__RG__fos_oauth_server_authorize
        if ($pathinfo === '/oauth/v2/auth') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_vi__RG__fos_oauth_server_authorize;
            }

            return array (  '_controller' => 'FOS\\OAuthServerBundle\\Controller\\AuthorizeController::authorizeAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_oauth_server_authorize',);
        }
        not_vi__RG__fos_oauth_server_authorize:

        // en__RG__fos_oauth_server_authorize
        if ($pathinfo === '/en/oauth/v2/auth') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_oauth_server_authorize;
            }

            return array (  '_controller' => 'FOS\\OAuthServerBundle\\Controller\\AuthorizeController::authorizeAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_oauth_server_authorize',);
        }
        not_en__RG__fos_oauth_server_authorize:

        // vi__RG__console
        if (rtrim($pathinfo, '/') === '/console') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_vi__RG__console;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vi__RG__console');
            }

            return array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::consoleAction',  '_locale' => 'vi',  '_route' => 'vi__RG__console',);
        }
        not_vi__RG__console:

        // en__RG__console
        if (rtrim($pathinfo, '/') === '/en/console') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__console;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__console');
            }

            return array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::consoleAction',  '_locale' => 'en',  '_route' => 'en__RG__console',);
        }
        not_en__RG__console:

        // vi__RG__console_exec
        if (0 === strpos($pathinfo, '/console') && preg_match('#^/console(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_vi__RG__console_exec;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__console_exec')), array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',  '_format' => 'json',  '_locale' => 'vi',));
        }
        not_vi__RG__console_exec:

        // en__RG__console_exec
        if (0 === strpos($pathinfo, '/en/console') && preg_match('#^/en/console(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__console_exec;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__console_exec')), array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',  '_format' => 'json',  '_locale' => 'en',));
        }
        not_en__RG__console_exec:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
