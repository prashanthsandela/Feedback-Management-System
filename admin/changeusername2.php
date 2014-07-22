<?php
include('menu.php');
$a=$_POST['newuser'];
$b=$_POST['password'];
$d=$_COOKIE['username'];
if(mysql_fetch_array(mysql_query("select cnt from admin_admin where username='$a'")))
{
    echo '<center>A username already exists with '.$a.'. Select another username';
}
else
{
            $c=mysql_fetch_array(mysql_query("select * from admin_admin where username='$d'"));
		
            if($c['password']==$b)
            {
                mysql_query("update admin_admin set username='$a' where username='$d'");
                echo '<center>Username changed to '.$a.'.';
                setcookie("username",$a,time()+60*20);
            }
            else
            {
                    echo '<center>Password doesnt match</center>';
                
                
            }
}
?>
