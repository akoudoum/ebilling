<?php

/* Improve PHP configuration to prevent issues */
@ini_set('display_errors', 'on');
error_reporting(-1);
@ini_set('upload_max_filesize', '2M'); 
@ini_set('default_charset', 'utf-8');
@ini_set('max_execution_time', '120');
/* Correct Apache charset */
header('Content-Type: text/html; charset=utf-8');

include(dirname('include/settings.inc.php'));


/* settings php */
define('_PS_MAGIC_QUOTES_GPC_',         get_magic_quotes_gpc());
define('_PS_MYSQL_REAL_ESCAPE_STRING_', function_exists('mysql_real_escape_string'));


?>