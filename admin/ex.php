<?php
$user_name="root";
$password="";
$l_host="localhost";
$db="feedback";
mysql_connect($l_host,$user_name,$password);
mysql_select_db($db);
if(!mysql_query("select * from mgit_3_cse_r07_dec_2011"))
{
die ('Error:'.mysql_error());
}
else
{echo "done...";
$result=mysql_query("select * from mgit_3_cse_r07_dec_2011");
while($a=mysql_fetch_array($result))
{
echo $a[0].'     '.$a[1].'     '.$a[2].'<br/>';
}
}
?>
