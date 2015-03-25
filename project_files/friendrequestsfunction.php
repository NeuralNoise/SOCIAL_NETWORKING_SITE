<a href = "profiletable.php">HOME</a>
<br></br>
<a href= "logout.php">Logout</a>
<br></br>
<?php
include 'connect_inc.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
$us_id = $_SESSION['us_id'];
if(isset($_GET['value']))
    $fr_frm = $_GET['value']; 
if (isset($_REQUEST['acc_rqst'])) {
  //Get friend array for logged in user  
  $get_friend_check = mysql_query("SELECT `us_farray` FROM `users` WHERE `us_id` = '$us_id' ");
  $get_friend_row = mysql_fetch_assoc($get_friend_check);
  $friend_array = $get_friend_row['us_farray'];
  $friendArray_explode = explode(",",$friend_array);
  $friendArray_count = count($friendArray_explode);
   $friendArray_count;
  //Get friend array for person who sent request
  $get_friend_check_friend = mysql_query("SELECT `us_farray` FROM `users` WHERE `us_id` ='$fr_frm'");
  $get_friend_row_friend = mysql_fetch_assoc($get_friend_check_friend);
  $friend_array_friend = $get_friend_row_friend['us_farray'];
  $friendArray_explode_friend = explode(",",$friend_array_friend);
  $friendArray_count_friend = count($friendArray_explode_friend);

  if ($friend_array == "") {
      //echo 'hello';
     $friendArray_count = count(NULL);
  }
  if ($friend_array_friend == "") {
      //echo 'hellomer';
     $friendArray_count_friend = count(NULL);
  }
 // echo $friendArray_count;
  //echo $friendArray_count_friend;
  if ($friendArray_count == NULL) {
    //  echo 'hello';
     //echo $concat = concat(friend_array,'$fr_frm');
      $friend_array .= $fr_frm;
     $add_friend_query = "UPDATE users SET us_farray ='$friend_array' WHERE `us_id` = '$us_id'";
    $add_friend_query_run = mysql_query($add_friend_query);
  }
  if ($friendArray_count_friend == NULL) {
    $friend_array_friend .= $us_id;  
    $add_friend_query = mysql_query("UPDATE users SET us_farray='$friend_array_friend' WHERE `us_id` = '$fr_frm'");
  }
  if ($friendArray_count >= 1) {
     // echo 'hello mr';
      $friend_array .= ','.$fr_frm;
   $add_friend_query = mysql_query("UPDATE users SET us_farray='$friend_array' WHERE `us_id` = '$us_id'");
  }
  if ($friendArray_count_friend >= 1) {
      $friend_array_friend .= ','.$us_id; 
   $add_friend_query = mysql_query("UPDATE users SET us_farray='$friend_array_friend' WHERE `us_id` = '$fr_frm'");
  }
  $u=2;
  //echo 'hello';
  $query = "UPDATE `friendrequests` SET `fr_st` = '$u' WHERE `fr_frm`='$fr_frm' AND `fr_to`= '$us_id' ";
  //echo $query;
  $query_run = mysql_query($query);
  echo "You are now friends!";
  echo '<br>';
  ?>
<a href = "friendrequests.php">Go Back</a>
     <?php
  //header("Location: friendrequests.php");
}
if (isset($_REQUEST['ignr_rqst'])) {
  echo $ignore_request  = "DELETE FROM `friendrequests` WHERE `fr_to` = '$us_id' AND `fr_frm` = '$fr_frm'";
     $ignore_request_run = mysql_query($ignore_request);
  echo "Request Ignored!";
  echo '<br>';
  ?>
<a href = "friendrequests.php">Go Back</a>
     <?php
  //header("Location: friendrequests.php");
}