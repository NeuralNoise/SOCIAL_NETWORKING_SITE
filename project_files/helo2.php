<?php
session_start();
//echo $_SESSION['us_id'];
//echo $_SESSION[value];
 foreach ($_SESSION as $key=>$val)
    echo $key." ".$val."<br/>";