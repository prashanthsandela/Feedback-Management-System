<?php
include('menu.php');
$a1=$_COOKIE['username'];
$a2=mysql_fetch_array(mysql_query("select * from admin_admin where slno=1"));
if($a1==$a2['username'])
{
    $a1=$_POST['aliasuser'];
    $a2=$_POST['aliaspassword'];
    
    $a3=mysql_fetch_array(mysql_query("select cnt from admin_admin where username='$a1'"));
    if($a3)
    {
        echo '<center>Username '.$a1.' already in use</center>';
    }
    else
    {   
        $a3=mysql_fetch_row(mysql_query("select count(*) from admin_admin"));
	$a3[0]++;
        if(!mysql_query("insert into admin_admin values($a3[0],1,'$a1','$a2')"))
        {echo "4";
            die('Error:'.mysql_error());
        }
        else
        {
            echo '<center>User '.$a1.' Created Successfully</center>';
        }
    }
}
else
{
    echo '<center><h3>You are not a super user</h3></center>';
}

?>