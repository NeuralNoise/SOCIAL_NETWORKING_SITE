<?php
include 'connect_inc.php';
function shareposts($us_share)
{ 
  $us_id = $_SESSION['us_id'];
      $query2 = "INSERT into `postscomment` VALUES ('','notuploaded','".date("Y-m-d")."','$us_id','$us_share') ";
     $query_run = mysql_query($query2);
      
}
?>
