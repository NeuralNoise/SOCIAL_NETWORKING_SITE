<?php
$mysql_host = 'mysql2.000webhost.com';
$mysql_user = 'a5408988_abhifb';
$mysql_pass = 'sacoder9114';
$mysql_db = 'a5408988_fb';
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db))
{
    die("<strong> Error In Database Connection or Selection </strong> ");
}
?>
