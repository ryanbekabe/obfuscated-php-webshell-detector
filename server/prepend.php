<?php
$POD_TRACELOG_DIR = "/tmp/obfusucated-php-detector/tracelog/";
$POD_EXEC_FILENAME = basename($_SERVER['PHP_SELF']);
xdebug_start_trace( "$POD_TRACELOG_DIR/$POD_EXEC_FILENAME" );
$POD_TRACELOG_FILENAME = "$POD_TRACELOG_DIR/$POD_EXEC_FILENAME".".xt";
?>
