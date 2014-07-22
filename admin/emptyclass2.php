<?php
include('menu.php');
$c=$_POST['tableselect'];
$d=mysql_fetch_array(mysql_query("select * from $c where slno=0"));

$e=mysql_num_fields(mysql_query("select * from $c"));

if(!mysql_query("truncate table $c"))
{
    die("Error:".mysql_error());
}
else
{
    echo '<br/><br/><br/><br/><br/><br/><br/><center><h1>'.$c.' has been Emptied Successfully</h1></center>';
    if($e==29)
    {
        mysql_query("insert into $c values(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)");
    }
    if($e==19)
    {
        mysql_query("insert into $c values(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)");
    }
    if($e==9)
    {
        mysql_query("insert into $c values(0,0,0,0,0,0,0,0,0)");
    }
    for($i=1;$i<$e;$i++)
    {
        mysql_query("update $c set $d[$i]='$d[$i]' where slno=0");
    }
}
    
?>


