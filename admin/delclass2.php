<?php
include('menu.php');
$c=$_POST['tableselect'];
if(!mysql_query("drop table $c"))
{
    die("Error:".mysql_error());
}
else
    echo '<br/><br/><br/><br/><br/><br/><br/><center><h1>'.$c.' has been Deleted Successfully</h1></center>'
?>


