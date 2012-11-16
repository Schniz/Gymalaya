<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-13 11:43:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 11:43:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 11:44:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 11:44:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 11:44:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 11:44:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 11:44:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 11:44:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 11:44:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 11:44:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 11:44:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 11:44:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 11:44:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 11:44:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 11:45:41 --- ERROR: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-11-13 11:45:41 --- STRACE: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('Muscle')
#4 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(26): Kohana_ORM::factory('Muscle')
#9 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_get(Object(Rest))
#10 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#11 [internal function]: Controller_Template_REST->before()
#12 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#13 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-13 11:45:43 --- ERROR: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-11-13 11:45:43 --- STRACE: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('Muscle')
#4 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(26): Kohana_ORM::factory('Muscle')
#9 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_get(Object(Rest))
#10 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#11 [internal function]: Controller_Template_REST->before()
#12 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#13 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-13 11:46:29 --- ERROR: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'gymalaya' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-11-13 11:46:29 --- STRACE: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'gymalaya' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('gymalaya')
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('Muscle')
#4 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(26): Kohana_ORM::factory('Muscle')
#9 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_get(Object(Rest))
#10 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#11 [internal function]: Controller_Template_REST->before()
#12 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#13 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-13 11:46:48 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-11-13 11:46:48 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('Muscle')
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(26): Kohana_ORM::factory('Muscle')
#8 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_get(Object(Rest))
#9 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#10 [internal function]: Controller_Template_REST->before()
#11 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#12 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#15 {main}
2012-11-13 11:46:49 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-11-13 11:46:49 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('Muscle')
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(26): Kohana_ORM::factory('Muscle')
#8 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_get(Object(Rest))
#9 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#10 [internal function]: Controller_Template_REST->before()
#11 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#12 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#15 {main}
2012-11-13 12:37:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-11-13 12:37:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-13 12:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user_guide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-11-13 12:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user_guide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-13 12:42:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_REST_Muscle::$_data ~ APPPATH\classes\model\rest\muscle.php [ 35 ]
2012-11-13 12:42:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_REST_Muscle::$_data ~ APPPATH\classes\model\rest\muscle.php [ 35 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Users\dean\D...', 35, Array)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_put(Object(Rest))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-13 12:48:08 --- ERROR: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, object given ~ APPPATH\classes\model\rest\muscle.php [ 35 ]
2012-11-13 12:48:08 --- STRACE: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, object given ~ APPPATH\classes\model\rest\muscle.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\Users\dean\D...', 35, Array)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(35): json_decode(Object(stdClass))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_put(Object(Rest))
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-13 12:51:01 --- ERROR: Kohana_Exception [ 0 ]: The a property does not exist in the Model_Muscle class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-11-13 12:51:01 --- STRACE: Kohana_Exception [ 0 ]: The a property does not exist in the Model_Muscle class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('a', 'b')
#1 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(37): Kohana_ORM->__set('a', 'b')
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_put(Object(Rest))
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-13 12:51:26 --- ERROR: Kohana_Exception [ 0 ]: The a property does not exist in the Model_Muscle class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-11-13 12:51:26 --- STRACE: Kohana_Exception [ 0 ]: The a property does not exist in the Model_Muscle class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('a', 'b')
#1 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(37): Kohana_ORM->__set('a', 'b')
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_put(Object(Rest))
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-13 12:51:57 --- ERROR: ErrorException [ 1 ]: Call to undefined function set() ~ APPPATH\classes\model\rest\muscle.php [ 37 ]
2012-11-13 12:51:57 --- STRACE: ErrorException [ 1 ]: Call to undefined function set() ~ APPPATH\classes\model\rest\muscle.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 12:52:09 --- ERROR: Kohana_Exception [ 0 ]: The a property does not exist in the Model_Muscle class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-11-13 12:52:09 --- STRACE: Kohana_Exception [ 0 ]: The a property does not exist in the Model_Muscle class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(37): Kohana_ORM->set('a', 'b')
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_put(Object(Rest))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-13 12:57:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\model\rest\muscle.php [ 55 ]
2012-11-13 12:57:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\model\rest\muscle.php [ 55 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\dean\D...', 55, Array)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_post(Object(Rest))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-13 12:58:33 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\rest\muscle.php [ 57 ]
2012-11-13 12:58:33 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\rest\muscle.php [ 57 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(57): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\Users\dean\D...', 57, Array)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_post(Object(Rest))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-13 13:01:31 --- ERROR: ErrorException [ 2 ]: ucfirst() expects parameter 1 to be string, object given ~ MODPATH\orm\classes\kohana\orm.php [ 35 ]
2012-11-13 13:01:31 --- STRACE: ErrorException [ 2 ]: ucfirst() expects parameter 1 to be string, object given ~ MODPATH\orm\classes\kohana\orm.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'ucfirst() expec...', 'C:\Users\dean\D...', 35, Array)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\orm\classes\kohana\orm.php(35): ucfirst(Object(Model_REST_Muscle))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(26): Kohana_ORM::factory(Object(Model_REST_Muscle), 'biceps')
#3 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_get(Object(Rest))
#4 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#5 [internal function]: Controller_Template_REST->before()
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#10 {main}
2012-11-13 13:04:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\classes\model\rest\muscle.php [ 28 ]
2012-11-13 13:04:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\classes\model\rest\muscle.php [ 28 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\dean\D...', 28, Array)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_get(Object(Rest))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-13 13:06:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 13:06:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 13:06:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 13:06:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 13:06:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 13:06:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 13:06:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 13:06:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 13:07:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 13:07:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 13:07:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 13:07:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 13:12:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_REST_Muscle::where() ~ APPPATH\classes\model\rest\muscle.php [ 32 ]
2012-11-13 13:12:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_REST_Muscle::where() ~ APPPATH\classes\model\rest\muscle.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 13:13:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: muscle ~ APPPATH\classes\model\rest\muscle.php [ 27 ]
2012-11-13 13:13:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: muscle ~ APPPATH\classes\model\rest\muscle.php [ 27 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\dean\D...', 27, Array)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_get(Object(Rest))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-13 13:13:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_REST_Muscle::where() ~ APPPATH\classes\model\rest\muscle.php [ 32 ]
2012-11-13 13:13:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_REST_Muscle::where() ~ APPPATH\classes\model\rest\muscle.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 13:14:37 --- ERROR: ErrorException [ 8 ]: Undefined property: Rest::$model ~ APPPATH\classes\model\rest\muscle.php [ 28 ]
2012-11-13 13:14:37 --- STRACE: ErrorException [ 8 ]: Undefined property: Rest::$model ~ APPPATH\classes\model\rest\muscle.php [ 28 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(28): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Users\dean\D...', 28, Array)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_get(Object(Rest))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-13 13:15:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\classes\model\rest\muscle.php [ 28 ]
2012-11-13 13:15:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\classes\model\rest\muscle.php [ 28 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\dean\D...', 28, Array)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Muscle->rest_get(Object(Rest))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-13 13:18:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\classes\model\rest\muscle.php [ 28 ]
2012-11-13 13:18:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\classes\model\rest\muscle.php [ 28 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\muscle.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\dean\D...', 28, Array)
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(229): Model_REST_Muscle->rest_get(Object(Rest))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-13 13:21:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Rest' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 13:21:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Rest' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 13:22:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Restapi' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-13 13:22:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Restapi' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 13:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-13 13:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 13:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-13 13:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 13:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-13 13:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 13:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-13 13:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 13:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-13 13:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 13:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-13 13:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 13:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-13 13:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 13:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-13 13:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 13:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-13 13:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/restapi/muscle/biceps ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 13:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/muscle was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-11-13 13:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/muscle was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-13 13:30:32 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2012-11-13 13:30:32 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\restapi.php(30): Kohana_ORM->find()
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Restapi->rest_get(Object(Rest))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-13 13:39:24 --- ERROR: Kohana_Exception [ 0 ]: Cannot update muscle model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-13 13:39:24 --- STRACE: Kohana_Exception [ 0 ]: Cannot update muscle model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 C:\Users\dean\Documents\GitHub\Gymalaya\application\classes\model\rest\restapi.php(64): Kohana_ORM->update()
#1 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\rest\core.php(225): Model_REST_Restapi->rest_post(Object(Rest))
#2 C:\Users\dean\Documents\GitHub\Gymalaya\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\dean\Documents\GitHub\Gymalaya\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\dean\Documents\GitHub\Gymalaya\index.php(109): Kohana_Request->execute()
#8 {main}