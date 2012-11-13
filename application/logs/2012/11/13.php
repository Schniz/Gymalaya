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