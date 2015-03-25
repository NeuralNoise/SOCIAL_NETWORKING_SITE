<?php
include 'connect_inc.php';
session_start();
        if(isset($_REQUEST['pocm_cm']))
        {
            if(!empty($_REQUEST['pocm_cm']))
            { 
     $pocm_cm  = $_REQUEST['pocm_cm'];
   $us_id = $_SESSION['us_id'];
     $field = $_REQUEST['id_value'];
     //echo $field;
   $query = "INSERT INTO `comments` VALUES ('','$pocm_cm','$us_id','".date("Y-m-d")."','$field') " ;
   $query_run  = mysql_query($query);
   //unset($_SESSION['pcom_cb']);
    header('Location: profiletable.php ');
            }
            else 
            {
                echo 'must supply somehting'; 
                 //header('Location: profiletable.php ');
            }
        }
?>