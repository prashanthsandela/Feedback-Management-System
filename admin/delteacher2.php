<?php
include ('menu.php');
echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";

mysql_select_db($db3);
$ab=$_POST['teacherselect'];

$result=mysql_query("select slno from teachers_list where ID='$ab'");
while($row=mysql_fetch_array($result))
{
    $abc=$row[0];
   
}
echo $abc;


if(!mysql_query("delete from teachers_list where ID='$ab'"))
{
    die('Error:'.mysql_error());
   
}
else
{   
    if(!mysql_query("update teachers_list set slno=slno-1 where slno>$abc"))
    {
        die('Error:::'.mysql_error());
    }
    mysql_query("drop table $ab");
    echo '<meta http-equiv="Refresh" content="10;url=menu.php"/><center><h1>TeacherID '.$ab.' deleted successfully</h1></center>';
}
?>


