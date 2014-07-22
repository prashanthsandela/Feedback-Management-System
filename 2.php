<?php
include('config.php');
$a1=$_COOKIE['selecttable'];
$a2=$_COOKIE['username'];
$a3=$_COOKIE['authentication'];
$ab1="condition1";$ab2="condition2";$ab3="condition3";$ab4="condition4";$ab5="condition5";$ab6="condition6";
if($a3==1001)
{
    $k=mysql_num_fields(mysql_query("select * from $a1"));
    $row=mysql_fetch_array(mysql_query("select * from $a1 where slno=0"));
    $z=($k-3)/2;
    setcookie("zoo",$z,time()+60*60);
echo '
    <head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
    <body align="center" background="images/stripe2.png">
    <br/><br/><br/><br/>
    <form action="form3.php" method="POST">
    <table align="center">
        <tr>
            <td>
                <pre>   </pre>
            </td>
            ';
for($a4=1;$a4<=6;$a4++)
{
    $c4='ab'.$a4;
    echo '<td>'.$$c4.'</td>';
}echo '</tr>';
for($a5=1,$a6=3;$a6<$k;$a6++,$a5++)
{
    echo '<tr><td>'.$row[$a6].'</td>';
    $a6++;
    for($a7=1;$a7<=6;$a7++)
    {
        echo '<td><select class="tb9" name="select'.$a5.$a7.'">';
        for($a8=1;$a8<=5;$a8++)
        {
            echo '<option>'.$a8.'</option>';
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table><input type=submit class="submit button"/></form>';


}

?>
