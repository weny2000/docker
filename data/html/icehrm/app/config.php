<?php
ini_set('error_log', 'data/icehrm.log');

define('APP_NAME', 'Ice Hrm');
define('FB_URL', 'Ice Hrm');
define('TWITTER_URL', 'Ice Hrm');

define('CLIENT_NAME', 'app');
define('APP_BASE_PATH', '/usr/share/nginx/html/icehrm/');
define('CLIENT_BASE_PATH', '/usr/share/nginx/html/icehrm/app/');
define('BASE_URL','http://localhost/icehrm/');
define('CLIENT_BASE_URL','http://localhost/icehrm/app/');

define('APP_DB', 'hrms');
define('APP_USERNAME', 'hrms');
define('APP_PASSWORD', 'hrms');
define('APP_HOST', 'hrmsDB');
define('APP_CON_STR', 'mysqli://'.APP_USERNAME.':'.APP_PASSWORD.'@'.APP_HOST.'/'.APP_DB);

//file upload
define('FILE_TYPES', 'jpg,png,jpeg');
define('MAX_FILE_SIZE_KB', 10 * 1024);
