<?
$ip=@$REMOTE_ADDR; 
echo "<b>IP Address= $ip</b>";
echo $_SERVER['REMOTE_ADDR'];
?>
<?php
include('menu.php');
mysql_select_db("$db3");
$a=mysql_fetch_row(mysql_query("select count(*) from teachers_list"));
$b=$_POST['teacherID'];
$c=$_POST['teachername'];
$d=mysql_fetch_array(mysql_query("select ID from teachers_list where ID='$b'"));
if($d[0]==$b)
{
    echo "this ID ".$_POST['teacherID']." has already been assigned";
}
else
{
    if(!mysql_query("insert into teachers_list values($a[0],'$c','$b')"))
    {
        die('Error:'.mysql_error());
    }
    else
    {
        $query="create table $b(slno int(3),class varchar(40),cks 
varchar(40),Condition1 int(2),Condition2 int(2),Condition3 int(2),Condition4 
int(2),Condition5 int(2),Condition6 int(2))";
if(!mysql_query($query))
{
    die(mysql_error());
}
	mysql_query("insert into $b 
values(0,'class','cks','condition1','condition2','condition3','condition4','c
ondition5','condition6')");
        echo "<h3>Insertion Successfull</h3>";
    }
}
?>
