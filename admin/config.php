<?php
$user_name="root";
$password="";
$l_host="localhost";
$db1="feedback";
$db2="studentDB";
$db3="teacherDB";
mysql_connect($l_host,$user_name,$password);
if(!mysql_select_db($db1))
{
mysql_query("create database $db1");
mysql_query("create database $db2");
mysql_query("create database $db3");
mysql_select_db($db1);
mysql_query("create table admin_admin(slno int(2),cnt int(2),username varchar(20),password varchar(20))");
mysql_query("insert into admin_admin values(1,1,'admin123456','123456')"); 
}
?>
