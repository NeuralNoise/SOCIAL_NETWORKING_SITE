<?php
include 'chechkandshowprofilepic.php';
require 'connect_inc.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
$us_id = $_SESSION['us_id'];
$query = "SELECT * FROM `users` WHERE `us_id` = '$us_id' ";
$query_run =  mysql_query($query);
 $us_un = mysql_result($query_run, 0, 'us_un');
$friendsArray = "";
$countFriends = "";
$friendsArray12 = "";
$addAsFriend = "";
$selectFriendsQuery = mysql_query("SELECT us_farray FROM users WHERE us_id = '$us_id'");
$friendRow = mysql_fetch_assoc($selectFriendsQuery);
$friendArray = $friendRow['us_farray'];
if ($friendArray != "") {
   $friendArray = explode(",",$friendArray);
   $countFriends = count($friendArray);
   //$friendArray20 = array_slice($friendArray, 0, 20);
  // echo $countFriends;
   for($i=0;$i<2;$i++)
   {
       //echo 'hello';
       $r = $friendArray[$i];
       $query = "SELECT `us_un`  FROM `users` WHERE `us_id` = '$r' ";
       $query_run = mysql_query($query);
     $username = mysql_result($query_run,0, `us_un`);
      // $userid = mysql_result($query_run,0, 'us_pl');
       chechkandshowprofilepic2($username,$r);
   }
}
/*
else
{
    ?>
<a href = "profileinfo.php?username=<?php echo $us_un;?>&userid=<?php echo $us_id; ?>">
<?php
echo $us_un;
echo ". has no friends yet.";
}
   if ($countFriends != 0) {
foreach ($friendArray12 as $key => $value) {
 $i++;
 $getFriendQuery = mysql_query("SELECT * FROM users WHERE username='$value' LIMIT 1");
 $getFriendRow = mysql_fetch_assoc($getFriendQuery);
 $friendUsername = $getFriendRow['username'];
 $friendProfilePic = $getFriendRow['profile_pic'];

 if ($friendProfilePic == "") {
  echo "<a href='$friendUsername'><img src='img/default_pic.jpg' alt=\"$friendUsername's Profile\" title=\"$friendUsername's Profile\" height='50' width='40' style='padding-right: 6px;'></a>";
 }
 else
 {
  echo "<a href='$friendUsername'><img src='userdata/profile_pics/$friendProfilePic' alt=\"$friendUsername's Profile\" title=\"$friendUsername's Profile\" height='50' width='40' style='padding-right: 6px;'></a>";
 }
}
}*/
else
echo $username." has no friends yet.";