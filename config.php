<?php
$hostn="localhost";
$usern="root";
$pass="";
$db="studentDB";
$db2="feedback";
if(!mysql_connect($hostn,$usern,$pass))
{
    die('Error:'.mysql_error());
}
if(!mysql_select_db($db))
{
    die('Error:'.mysql_error());
}
?>
