<a href = "profiletable.php">HOME</a>
<br></br>
<a href= "logout.php">Logout</a>
<br></br>
<?php
//Find Friend Requests
require 'connect_inc.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
$us_id = $_SESSION['us_id'];
//echo $us_id;
$u=1;
$friendRequests = mysql_query("SELECT * FROM `friendrequests` WHERE `fr_to` = '$us_id' AND `fr_st` = '$u' ");
$numrows = mysql_num_rows($friendRequests);
//echo $numrows;
if ($numrows == 0) {
 echo "You have no friend Requests at this time.";
 $fr_frm = "";
}
else
{
 while ($get_row = mysql_fetch_assoc($friendRequests))
 {
  //$id = $get_row['id']; 
  $fr_to = $get_row['fr_to'];
  $fr_frm = $get_row['fr_frm'];
  $mwery=  mysql_query("SELECT `us_un` FROM `users` WHERE `us_id` = '$fr_frm' ");
  $query_result = mysql_result($mwery,0, 'us_un');
  ?>
<a href = "profileinfo.php?username=<?php echo $query_result;?>&userid=<?php echo $fr_frm; ?>"><?php echo $query_result; ?></a>
<?php echo 'Wants to be friend with u'.'<br>';
?>
<form action="friendrequestsfunction.php" method="GET">
<input type="submit" name="acc_rqst" value="Accept Request">
<input type="submit" name="ignr_rqst" value="Ignore Request">
<input type="hidden" name="value" value= "<?php echo $fr_frm; ?>">
</form>
<?php
  }
}
?>
