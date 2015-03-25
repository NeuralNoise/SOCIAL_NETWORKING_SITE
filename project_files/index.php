<?php
require 'core_inc.php';  
require 'loggedinfunc.php';
//echo $current_file;
require 'connect_inc.php';
?>
<html>
  <body style="font-family:Arial; background-image:url(header_images.jpg) ">
     <table align='center' width=1000 bgcolor = "lightblue">
         <tr><td><a href= " index.php"> <strong><p style="font-size:45px">Welcome!</strong></p></a></td><td><?php include 'loginform.php' ?></td></tr>           
         <tr><td width= 400><p style="font-size:25px"><br></br>New User Sign Up!</p><?php  include 'registration.php' ?></td>
             <td width = 600 align = 'center' ><a href = "index.php"><img src = "footer2.jpg"></a></td>
         </tr> 
         <tr><td colspan = 2 align ='right'><?php include 'footer.php'; ?></td></tr>
     </table>
  </body>
</html>