 

<?php
include("connect_inc.php");
session_start();
$us_id = $_SESSION['us_id'];
$select_query = "SELECT `p_pl` , `p_cp` FROM  `photo`  WHERE  `p_ub` = '$us_id' ";
$sql = mysql_query($select_query) or die(mysql_error());
$query_num_rows =  mysql_num_rows($sql);
if($query_num_rows == 0)
{
    echo 'No photo to display';
}
else
{
//$query_result = mysql_result($sql,0,'us_pl');
while($row = mysql_fetch_assoc($sql)){
?>
<table style="border-collapse: collapse; font: 12px Tahoma;" border="3" cellspacing="7" cellpadding="7">
<tbody><tr>
<td>
    <?php echo $row['p_cp'].'<br>'; ?>
<img src= " <?php echo $row['p_pl']; ?> ">
<?php
}
}
?>



