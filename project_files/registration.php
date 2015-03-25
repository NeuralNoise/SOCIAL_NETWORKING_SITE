<?php
if(!loggedin())
{  
    if(isset($_REQUEST['us_fn'])&&isset($_REQUEST['us_ln'])&&isset($_REQUEST['us_unn'])&&isset($_REQUEST['us_pp'])&&isset($_REQUEST['us_cp'])&&isset($_REQUEST['us_cn'])&&isset($_REQUEST['us_ei'])&&isset($_REQUEST['us_s'])&&isset($_REQUEST['us_bd']))
    {
        $us_fn=$_REQUEST['us_fn'];
        $us_ln=$_REQUEST['us_ln'];
        $us_unn=$_REQUEST['us_unn'];
        $us_pp=$_REQUEST['us_pp'];
        $us_cp=$_REQUEST['us_cp'];
        $us_cn=$_REQUEST['us_cn'];
        $us_ei=$_REQUEST['us_ei'];
        $us_s=$_REQUEST['us_s'];
        $us_bd=$_REQUEST['us_bd'];
        $us_ph=md5($us_pp);
        if(!empty($us_fn)&&!empty($us_ln)&&!empty($us_unn)&&!empty($us_pp)&&!empty($us_cp)&&!empty($us_cn)&&!empty($us_ei)&&!empty($us_s)&&!empty($us_bd))
        {
            if($us_pp!=$us_cp)
            {
                echo 'Password do not match';
            }
            else
            {
             $query = "SELECT `us_un` FROM `users` WHERE `us_un` = '$us_unn' ";
             $query_run = mysql_query($query);
            // echo $run= mysql_num_rows($query_run);
             if(mysql_num_rows($query_run)==1)
             {
                 echo 'Username alredy exists';
             }
             else
             {
                $query = "INSERT INTO `users` VALUES ('".mysql_real_escape_string($us_fn)."','".mysql_real_escape_string($us_ln)."','".mysql_real_escape_string($us_unn)."','".mysql_real_escape_string($us_ph)."','".mysql_real_escape_string($us_cn)."','".mysql_real_escape_string($us_ei)."','$us_s','$us_bd','','','notuploaded','')";
                        //  
                $query_run = mysql_query($query);
                if($query_run)
                {
                   header('Location: registersuccess.php');
                }
                else
                {
                    echo 'Cant process Now Please Try Later.';
                }
             }
               
            }
        }
 else {
     echo 'All fields are mandatory to be filled';
 }
    }
   
?>

<form action = "<?php echo $current_file; ?>" method ="POST">
    <table>
    <tr><td align = 'center'>First Name: </td><td><input type = "text" name = "us_fn" value = "<?php if(isset($us_fn)){ echo $us_fn; }?> " /><br></br></td></tr>
    <tr><td align = 'center'>Last Name:</td><td> <input type = "text" name = "us_ln"  value = "<?php if(isset($us_ln)){ echo $us_ln; }?> " /><br></br></td></tr>
    <tr><td align = 'center'>UserName:</td><td> <input type = "text" name = "us_unn"  value = "<?php if(isset($us_unn)){ echo $us_unn; }?> "  /><br></br></td></tr>
    <tr><td align = 'center'>Password:</td><td> <input type = "password" name = "us_pp" /><br></br></td></tr>
    <tr><td align = 'center'>Password Again: </td><td><input type = "password" name = "us_cp" /><br></br></td></tr>
    <tr><td align = 'center'>Contact Number:</td><td> <input type ="text" name = "us_cn" / value = "<?php if(isset($us_cn)){ echo $us_cn; }?> " ><br></br></td></tr>
    <tr><td align = 'center'>Email:</td><td> <input type = "text" name ="us_ei" value = "<?php if(isset($us_ei)){ echo $us_ei; }?> " /><br></br></td></tr>
<tr><td align = 'center'>I'm:</td><td>
<select name="us_s"  >
  <option value="">Select Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select><br></br></td></tr>
<tr><td align ='center'>Birth Date:</td><td><input type = "date" name = "us_bd"  /><br></br></td><tr>
<tr><td align = 'center'><input type = "submit" value = "SignUp"/>  </td></tr>
    </table>
</form>

<?php
 }else if(loggedin())
{
  echo 'you are already logged in and registered';  
}
?>

