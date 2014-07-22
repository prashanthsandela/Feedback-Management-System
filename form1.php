<?php
include('config.php');
$a1=$_COOKIE['selecttable'];
$a2=$_COOKIE['username'];
$a3=$_COOKIE['password'];
$a5=mysql_fetch_array(mysql_query("select *  from $a1 where slno=0"));
$a4=mysql_fetch_array(mysql_query("select * from $a1 where username='$a2'"));
setcookie("slnoof",$a4[0],time()+60*60);
if($a2==$a4[1]&&$a2!=$a5[1])
{
    if($a3==$a4[2])
    {
        setcookie("authentication","1001",time()+60*60);
        echo '
            <html>
<link rel="stylesheet" href="style.css" type="text/css" />
    <head>
        <meta http-equiv="Refresh" content="3;url=form2.php"/>
    </head>

<body align="center" background="images/stripe2.png">
<center>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <img src="images/5.gif" height=200 width=200/><br/><br/>
<p><font face="Mistral" size="4" color="black">Logged in Successfully</font></p></center>
</body>
</html>
        ';
    }
    else
    {
        echo '
            <html>
<link rel="stylesheet" href="style.css" type="text/css" />
    <head>
        <meta http-equiv="Refresh" content="3;url=index.php"/>
    </head>

<body align="center" background="images/stripe2.png">
<center>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <img src="images/5.gif" height=200 width=200/><br/><br/>
<p><font face="Mistral" size="4" color="black">Wrong Username or Password</font></p></center>
</body>
</html>
            ';
    }
}
 else {echo '
     <html>
<link rel="stylesheet" href="style.css" type="text/css" />
    <head>
        <meta http-equiv="Refresh" content="3;url=index.php"/>
    </head>

<body align="center" background="images/stripe2.png">
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <img src="images/5.gif" height=200 width=200/><br/><br/>
<p><font face="Mistral" size="4" color="black">Wrong Username or Password</font></p>
</body>
</html>
';
 }
?>
