<?php

Config::set('site_name', 'Your Site Name');

Config::set('languages', array('en', 'fr'));

// Routes. Route name => method prefix
Config::set('routes', array(
    'default' => '',
    'admin'   => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

Config::set('root_prefix', '/mvc-2016-11-09/lc7-1');
//Движок парсит адрес какой дали, и если сайт не в %webroot% http server'а 
//то mvc-2016-11-09/lc7-1 в mvc-2016-11-09/lc7-1/blog тоже парситься
//и, соответствено за контроллер берется mvc-2016-11-09 а за мтод lc7-1
//То же самое можно было исправить в .htaccess, 
//но не факт, что на хосте клиента 1 нас будет доступ к немк.