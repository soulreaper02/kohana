<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-07-15 22:36:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/html/kohana/system/classes/Kohana/View.php:137
2017-07-15 22:36:09 --- DEBUG: #0 /var/www/html/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('main')
#1 /var/www/html/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('main', NULL)
#2 /var/www/html/kohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('main')
#3 /var/www/html/kohana/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/html/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/kohana/system/classes/Kohana/View.php:137