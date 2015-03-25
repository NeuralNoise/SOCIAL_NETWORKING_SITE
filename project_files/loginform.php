<?php
if(!loggedin())
{
if (isset($_REQUEST['us_un'])&&isset($_REQUEST['us_p']))
{
    $us_un=$_REQUEST['us_un'];
     $us_p=$_REQUEST['us_p'];
    //echo '<br>';
    $us_ph = md5($us_p);
    if(!empty($us_un)&&!empty($us_p))
    {  
        $us_un = mysql_real_escape_string($us_un);
     $query = "SELECT `us_id` FROM `users` WHERE `us_un` REGEXP '$us_un' AND `us_p` = '$us_ph' ";
    if( $query_run = mysql_query($query))
    {
       // echo 'muio';
         $query_num_rows = mysql_num_rows($query_run);
        if( $query_num_rows == 0)
            {
         //   echo 'hello mer';
        echo 'Invalid Username/password Combination';
            }
        else if( $query_num_rows == 1)
        {
         //   echo 'hello';
         $us_id = mysql_result($query_run,0,'us_id');
         $_SESSION['us_id'] = $us_id;
         header('Location: profiletable.php');
        }
    }
    }
    else
    {
        echo "supply username and password";
    }
}
    ?>
<form action = "<?php echo $current_file ?>" method ="POST"> 
    <table align = "right" vertical-align = "top" >
        <tr><td>Username: <input type="text" name = "us_un" placeholder= "username" /> Password: <input type="password" name = "us_p"/>            <input type = "submit" value = "Login"/></td></tr>
    </table>
</form>
<?php
}
else if(loggedin())
{
 echo 'You are logged in.<a href = "profile.php"> Go to HomePage</a>';
 die();
}
?>