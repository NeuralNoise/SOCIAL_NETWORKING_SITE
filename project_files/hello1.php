<?php
if(isset($_REQUEST['value']))
{
     $value = $_REQUEST['value'];
    $p=4;
    $_SESSION['$value'] = $value;
    session_start();
    echo '<br>';
    echo $_SESSION[$value];
}

