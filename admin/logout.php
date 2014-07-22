<html>
<head><meta http-equiv="Refresh" content="5;url=index.php"/></head>
<body align=center background="images/background2.jpg"><center>
<br/><br/><br/><br/>
<img src="images/loading.gif"/>
<h1>Logged Out Successfully</h1></center>
</body>
</html>
<?php
$k=$_COOKIE["username"];
setcookie("username",$k ,time()-3600);
?>
