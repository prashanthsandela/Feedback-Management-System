<?php
include('menu.php');
mysql_select_db($db2);
$a1=$_POST['selecttable'];
if(!mysql_query("drop table $a1"))
{
    die('ERROR: '.mysql_error());
}
else
{
    echo '<br/><br/><br/><br/><center><h3>Table '.$a1.' has been removed from feedback';
}
?>
