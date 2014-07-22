<?php
include('menu.php');
$a1=$_POST['oldpassword'];
$a2=$_POST['newpassword'];
$a3=$_COOKIE['username'];
$a4=mysql_fetch_array(mysql_query("select * from admin_admin where username='$a3'"));

if($a1==$a2)
{
    echo '<center>Old and New Passwords cant be the same</center>';
}
else
{
    if($a1!=$a4['password'])
    {
        echo '<center>Old password doesnt match</center>';
    }
    else
    {
        mysql_query("update admin_admin set password='$a2' where password='$a1'");
        echo '<center><table><tr><td>Password changed successfully.</td></tr> <br/><tr><td>Your username is '.$a3.'</td></tr></table></center>';
    }
}
?>
