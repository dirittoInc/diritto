<?php

define('DSN', 'mysql:host=mysql12018.xserver.jp;dbname=xs340682_wt1;charset=utf8;');
define('DB_USER', 'xs340682_diritto');
define('DB_PASSWORD', 'diritto6612');

error_reporting(E_ALL & ~E_NOTICE);

mb_language("Japanese");
mb_internal_encoding("UTF-8");
ini_set("memory_limit", "1000M");
date_default_timezone_set('Asia/Tokyo');

?>
