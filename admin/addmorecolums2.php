<?php
include('menu.php');
include('config.php');
$class=$_COOKIE["lasttable"];
$a1=$_POST['subject'];
$a2='A'.$_POST['teacher'];
echo $class;
if((mysql_query("alter table $class add column $a1 varchar(20)")&&(mysql_query("alter table $class add column $a2 varchar(20)"))))
{
    echo '<br/><br/><br/><br/><center><h1>Insertion Sucessfull</h1></center>';
}
else
{
die('ERROR:'.mysql_error());
    echo '<br/><br/><br/><br/><center><h1>Insertion Unsucessfull</h1></center>';
}
include('Addmorecolums1.php');
?>
