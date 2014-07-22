<?php
include('config.php');
$a1=$_POST['selecttable'];
$a2=$_POST['username'];
$a3=$_POST['password'];
setcookie("username",$a2,time()+60*60);
setcookie("password",$a3,time()+60*60);
setcookie("selecttable",$a1,time()+60*60);
?><html>
<link rel="stylesheet" href="style.css" type="text/css" />
    <head>
        <meta http-equiv="Refresh" content="4;url=form1.php"/>
    </head>

<body align="center" background="images/stripe2.png"><center>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <img src="images/5.gif" height=200 width=200/><br/><br/>
<p color="white">Please wait..</p></center>
</body>
</html>