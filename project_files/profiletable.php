<?php
require 'connect_inc.php';
require 'chechkandshowprofilepic.php'
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link  type  = 'text/css' rel = "stylesheet" href = "profiletable.css" >
    </head>
<body bgcolor = "lightgreen">
    <table align ='center'  width = 1400 bgcolor = "white">
      
          <tr><td colspan = 2></td></tr>
         <tr><td colspan = 2></td></tr>
                    <tr> <div id = "firstpart">
                        <td width =200>   
                        <table>                      
         <tr><td colspan =2><?php chechkandshowprofilepic(); ?></td></tr>
         <tr><td colspan =2></td></tr>
              <tr><td colspan =2></td></tr>
                                    <tr><td colspan =2><img src = 'wal.png'><a href = 'profiletable.php'>Wall</a></td></tr> 
                                   <tr><td colspan =2><img src = 'photos.png'><a href = 'editprofilepic.php'>EditProfilePic</a></td></tr>
                                    <tr><td colspan =2><img src = 'profileinfo.png'><a href = 'editprofile.php'>Profile Info</a></td></tr>
                                    <tr><td colspan =2><img src = 'friends.png'><a href = 'friends.php'>Friends</a></td></tr>
                                    <tr><td colspan =2><img src = 'messages.png'><a href = 'message.php'>Messages</a></td></tr>
                                    <tr><td colspan =2><img src = 'photos.png'><a href = 'photos.php'>Photos</a></td></tr>
                        </table>
            </td>
        </div>
                            <div id = "secondpart">
            <td width = 1000 >
                <table align ='center'>
                    <tr><td colspan =2 ><?php include 'accountmiddleheader.php'; ?><br></br><br></br></td></tr>
                    <form action = 'profiletable.php' method ='POST'>
                            <tr><td colspan =2>     
                                    <textarea rows = "6" cols= "50" name = 'us_share' placeholder="What's in your mind....."></textarea>
                        </td></tr>
                            <tr><td align ='right' colspan ='2'><input type ='submit' value ='share' name = 'us_sharesubmit'></td></tr>
                    </form>
                    <tr><td colspan = 2>
                    <?php
if(isset($_REQUEST['us_share']))
{
    if(!empty($_REQUEST['us_share']))
    {
        $us_share = $_REQUEST['us_share'];
         include 'shareposts.php';
         shareposts($us_share);
    }
    else
    {
        echo 'must supply something to share';
    }
}
?>
                        </td></tr>
                    <tr><td colspan =2><?php include 'displaypost.php'; ?></td></tr>
                </table>  
            </td>
                            </div>
                            <div id = "thirdpart">
            <td width = 200>
                <?php include 'accountsideheader.php'; ?>
            </td>
                            </div>
        </tr>   
    </table>
</body>