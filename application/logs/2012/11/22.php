<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-22 17:55:20 --- ERROR: Database_Exception [ 1146 ]: Table 'gymalaya.exerciseprogressbyworkout' doesn't exist [ SHOW FULL COLUMNS FROM `Exerciseprogressbyworkout` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-22 17:55:20 --- STRACE: Database_Exception [ 1146 ]: Table 'gymalaya.exerciseprogressbyworkout' doesn't exist [ SHOW FULL COLUMNS FROM `Exerciseprogressbyworkout` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('Exerciseprogres...')
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#6 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\restapi.php(29): Kohana_ORM::factory('exerciseprogres...', '1')
#7 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Restapi->rest_get(Object(Rest))
#8 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#9 [internal function]: Controller_Template_REST->before()
#10 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#14 {main}
2012-11-22 17:56:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_Excercieprogressbyworkout' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-22 17:56:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_Excercieprogressbyworkout' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-22 17:56:27 --- ERROR: Database_Exception [ 1146 ]: Table 'gymalaya.exerciseprogressbyworkout' doesn't exist [ SHOW FULL COLUMNS FROM `Exerciseprogressbyworkout` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-22 17:56:27 --- STRACE: Database_Exception [ 1146 ]: Table 'gymalaya.exerciseprogressbyworkout' doesn't exist [ SHOW FULL COLUMNS FROM `Exerciseprogressbyworkout` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('Exerciseprogres...')
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#6 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\restapi.php(29): Kohana_ORM::factory('Exerciseprogres...', '1')
#7 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Restapi->rest_get(Object(Rest))
#8 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#9 [internal function]: Controller_Template_REST->before()
#10 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#14 {main}
2012-11-22 17:57:11 --- ERROR: Database_Exception [ 1146 ]: Table 'gymalaya.exerciseprogressbyworkout' doesn't exist [ SHOW FULL COLUMNS FROM `Exerciseprogressbyworkout` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-22 17:57:11 --- STRACE: Database_Exception [ 1146 ]: Table 'gymalaya.exerciseprogressbyworkout' doesn't exist [ SHOW FULL COLUMNS FROM `Exerciseprogressbyworkout` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('Exerciseprogres...')
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#6 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\restapi.php(29): Kohana_ORM::factory('Exerciseprogres...', '1')
#7 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Restapi->rest_get(Object(Rest))
#8 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#9 [internal function]: Controller_Template_REST->before()
#10 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#14 {main}
2012-11-22 17:57:12 --- ERROR: Database_Exception [ 1146 ]: Table 'gymalaya.exerciseprogressbyworkout' doesn't exist [ SHOW FULL COLUMNS FROM `Exerciseprogressbyworkout` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-22 17:57:12 --- STRACE: Database_Exception [ 1146 ]: Table 'gymalaya.exerciseprogressbyworkout' doesn't exist [ SHOW FULL COLUMNS FROM `Exerciseprogressbyworkout` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('Exerciseprogres...')
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#6 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\restapi.php(29): Kohana_ORM::factory('Exerciseprogres...', '1')
#7 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Restapi->rest_get(Object(Rest))
#8 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#9 [internal function]: Controller_Template_REST->before()
#10 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#14 {main}
2012-11-22 17:57:14 --- ERROR: Database_Exception [ 1146 ]: Table 'gymalaya.exerciseprogressbyworkout' doesn't exist [ SHOW FULL COLUMNS FROM `Exerciseprogressbyworkout` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-22 17:57:14 --- STRACE: Database_Exception [ 1146 ]: Table 'gymalaya.exerciseprogressbyworkout' doesn't exist [ SHOW FULL COLUMNS FROM `Exerciseprogressbyworkout` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('Exerciseprogres...')
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#6 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\restapi.php(29): Kohana_ORM::factory('Exerciseprogres...', '1')
#7 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Restapi->rest_get(Object(Rest))
#8 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#9 [internal function]: Controller_Template_REST->before()
#10 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#14 {main}
2012-11-22 17:57:39 --- ERROR: Database_Exception [ 1146 ]: Table 'gymalaya.exerciseprogressbyworkout' doesn't exist [ SHOW FULL COLUMNS FROM `Exerciseprogressbyworkout` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-22 17:57:39 --- STRACE: Database_Exception [ 1146 ]: Table 'gymalaya.exerciseprogressbyworkout' doesn't exist [ SHOW FULL COLUMNS FROM `Exerciseprogressbyworkout` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('Exerciseprogres...')
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#6 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\restapi.php(29): Kohana_ORM::factory('exerciseprogres...', '1')
#7 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Restapi->rest_get(Object(Rest))
#8 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#9 [internal function]: Controller_Template_REST->before()
#10 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#14 {main}