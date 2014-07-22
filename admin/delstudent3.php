6<?php
include ('menu.php');
echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";
$tab=$_COOKIE['deltab'];
setcookie("deltab",$tab,time()-60);
$ab=$_POST['studentID'];

$result=mysql_query("select slno from $tab where rollnumber='$ab'");
while($row=mysql_fetch_array($result))
{
    $abc=$row[0];
   
}


if(!mysql_query("delete from $tab where rollnumber='$ab'"))
{
    die('Error:'.mysql_error());
    echo '<meta http-equiv="Refresh" content="3;url=delstudent1.php"/><center><h1>Student ID '.$ab.' doesnot exist</h1></center>';
}
else
{   
    if(!mysql_query("update $tab set slno=slno-6 where slno>$abc"))
    {
        die('Error:::'.mysql_error());
    }
    echo '<meta http-equiv="Refresh" content="10;url=menu.php"/><center><h1>StudentID '.$ab.' deleted successfully</h1></center>';
}
?>


