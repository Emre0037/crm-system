<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/conversation/table2' => [[['_route' => 'conversationnewTable2', '_controller' => 'App\\Controller\\ConversationController::duplicateTableMessages'], null, null, null, false, false, null]],
        '/conversation/group' => [[['_route' => 'conversationnew_group_conversation', '_controller' => 'App\\Controller\\ConversationController::createGroupConversation'], null, null, null, false, false, null]],
        '/conversation' => [[['_route' => 'conversationget_conversation', '_controller' => 'App\\Controller\\ConversationController::getConvs'], null, ['GET' => 0], null, true, false, null]],
        '/test' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/test4' => [[['_route' => 'test4', '_controller' => 'App\\Controller\\HomeController::test'], null, null, null, false, false, null]],
        '/live' => [[['_route' => 'testlivepagelivepage', '_controller' => 'App\\Controller\\LiveTestController::vote'], null, ['GET' => 1], null, true, false, null]],
        '/messages/welcome' => [[['_route' => 'messages.welcmechatter', '_controller' => 'App\\Controller\\MessageController::getConversationPage'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages/admin' => [[['_route' => 'messages.app_message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|components/([^/]++)(?:/([^/]++))?(*:78)'
                    .'|wdt/([^/]++)(*:97)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:142)'
                            .'|router(*:156)'
                            .'|exception(?'
                                .'|(*:176)'
                                .'|\\.css(*:189)'
                            .')'
                        .')'
                        .'|(*:199)'
                    .')'
                .')'
                .'|/conversation/([^/]++)(*:231)'
                .'|/messages/(?'
                    .'|user(?'
                        .'|DeleteGroup/([^/]++)/([^/]++)(*:288)'
                        .'|Add/([^/]++)/([^/]++)(*:317)'
                        .'|info/([^/]++)/([^/]++)(*:347)'
                    .')'
                    .'|groupinfo/([^/]++)(*:374)'
                    .'|([^/]++)/(?'
                        .'|([^/]++)(*:402)'
                        .'|delete/([^/]++)(*:425)'
                    .')'
                    .'|delete(?'
                        .'|user/([^/]++)/([^/]++)(*:465)'
                        .'|group/([^/]++)/([^/]++)(*:496)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'ux_live_component', 'action' => 'get'], ['component', 'action'], null, null, false, true, null]],
        97 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        142 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        156 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        176 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        189 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        199 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        231 => [[['_route' => 'conversationnew_conversation', '_controller' => 'App\\Controller\\ConversationController::index'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'messages.user_Delete_Group', '_controller' => 'App\\Controller\\MessageController::removeParticipantFromConversation'], ['userid', 'idconversation'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        317 => [[['_route' => 'messages.user_Add', '_controller' => 'App\\Controller\\MessageController::userAdd'], ['userid', 'idconversation'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        347 => [[['_route' => 'messages.user_info', '_controller' => 'App\\Controller\\MessageController::userInfo'], ['userid', 'idconversation'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        374 => [[['_route' => 'messages.group_info', '_controller' => 'App\\Controller\\MessageController::groupInfo'], ['idConversation'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        402 => [[['_route' => 'messages.getMessages', '_controller' => 'App\\Controller\\MessageController::getConversation'], ['otherUser', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        425 => [[['_route' => 'messages.category_delete', '_controller' => 'App\\Controller\\MessageController::deleteAction'], ['otherUser', 'id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        465 => [[['_route' => 'messages.category_delete_user', '_controller' => 'App\\Controller\\MessageController::deleteUserAction'], ['id', 'idConversation'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        496 => [
            [['_route' => 'messages.category_delete_group', '_controller' => 'App\\Controller\\MessageController::deleteGroupAction'], ['id', 'idConversation'], ['GET' => 0, 'DELETE' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
