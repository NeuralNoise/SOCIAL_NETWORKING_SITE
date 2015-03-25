<?php
require 'connect_inc.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
$us_id = $_SESSION['us_id'];
$query = "SELECT * FROM `users` WHERE `us_id` = '$us_id' ";
$query_run =  mysql_query($query);
 $us_un = mysql_result($query_run, 0, 'us_un');
 if(isset($_REQUEST['value_name']))
 {
     $value_name = $_REQUEST['value_name'];
     $uname = $_REQUEST['value_name']; 
    // echo $value_name;
 }
?>

<html>
<head>
<title>Chat Box</title>
<link rel="stylesheet" type="text/css" href="chat.css" />
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script>
    //var uname = form1.uname.value;
    
    var user_name = '<?php echo $uname; ?>';
    //document.write(user_name);
function submitChat(){
		if( form1.msg.value == ''){
				alert('ALL FIELDS ARE MANDATORY!!!');
				return;
			}
			form1.uname.readOnly = true;
			form1.uname.style.border = 'none';
			$('#imageload').show();
			var uname = form1.uname.value;
			var msg = form1.msg.value;
                       // document.write(uname);
                        //document.write(msg);
			var xmlhttp = new XMLHttpRequest();
			
			xmlhttp.onreadystatechange = function(){
					if(xmlhttp.readyState==4&&xmlhttp.status==200){
							document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
							$('#imageload').hide();
						}
				}
			xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
			xmlhttp.send();
                        
	}
       
  $(document).ready(function(e) {
        $.ajaxSetup({cache:false});
		setInterval(function() {$('#chatlogs').load("logs.php?username=<?php echo urlencode($uname); ?>");}, 2000);
    });
	

</script>

</head>
<body>
<form name="form1">
 <input type="hidden" name="uname" value = "<?php echo $value_name;?> " style="width:200px;"/><br />
Your Message: <br />
<textarea name="msg" style="width:200px; height:70px"></textarea><br />
<a href="#" onclick="submitChat()" class="button">Send</a><br /><br />

<div id="imageload" style="display:none;">
<img src="1-0.gif" />
</div>

<div id="chatlogs">
LOADING CHATLOGS PLEASE WAIT... <img src="1-0.gif" />
</div>

</body>
