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
        echo "<script> alert(' FIELDS ARE MANDATORY!!!'); </script>";
    }
}
?>
<html>
    <head>
        <title>NewsShare</title>
    </head>
    <body style="background-color: #bdc3c7">
        <script>
            
        </script>
    </body>
</html>
<table align ='center'>            
                    <form action = 'newshare.php' method ='POST'>
                            <tr><td colspan =2>     
                                    <textarea rows = "10" cols= "70" name = 'us_share' placeholder="Post Your Question Here...."></textarea>
                        </td></tr>
                            <tr><td align ='right' colspan ='2'><input type ='submit' value ='share' name = 'us_sharesubmit'></td></tr>
                    </form>
</table>