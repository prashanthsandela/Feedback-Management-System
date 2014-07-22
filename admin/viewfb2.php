<?php
include('menu.php');
$a1=$_POST['selectid'];
mysql_select_db($db3);
$query=mysql_query("select count(*) from $a1");
$a2=mysql_fetch_row($query);
for($i=1;$i<$a2[0];$i++)
{
    mysql_select_db($db3);
    if(!mysql_query("select cks from $a1 where slno=$i"))
    {
        die('error2:'.mysql_error());
    }
    
    $result=mysql_query("select cks from $a1 where slno=$i");
    
    $a3=mysql_fetch_array($result);
    
    mysql_select_db($db1);
    if(!mysql_query("select * from $a3[0]")){echo 'error4:'.mysql_error();}
    $a4=mysql_fetch_row(mysql_query("select count(*) from $a3[0]"));   
    $a4[0]--;
   
    $a5=1;$a6=2;$a7=3;$a8=4;$a9=5;$a10=6;
    $a17=0;$a18=0;$a19=0;$a20=0;$a21=0;$a22=0;$count=0;
    if($a4[0]==0)
    {
        $count=1;
	
    }
    $a44=$a4[0]/6;

    if($a4[0]!=0)
    {
    for($j=1;$j<=$a44;$j++)
    {

        $a11=mysql_fetch_array(mysql_query("select $a1 from $a3[0] where slno=$a5"));
        $a12=mysql_fetch_array(mysql_query("select $a1 from $a3[0] where slno=$a6"));
        $a13=mysql_fetch_array(mysql_query("select $a1 from $a3[0] where slno=$a7"));
        $a14=mysql_fetch_array(mysql_query("select $a1 from $a3[0] where slno=$a8"));
        $a15=mysql_fetch_array(mysql_query("select $a1 from $a3[0] where slno=$a9"));
        $a16=mysql_fetch_array(mysql_query("select $a1 from $a3[0] where slno=$a10"));
        
        
        
        if($a11[0]!=0)
        {
            
            $count++;
            $a17=$a11[0]+$a17;
            $a18=$a12[0]+$a18;
            $a19=$a13[0]+$a19;
            $a20=$a14[0]+$a20;
            $a21=$a15[0]+$a21;
            $a22=$a16[0]+$a22;
            
        }
        $a5=1+$j*6;
        $a6=2+$j*6;
        $a7=3+$j*6;
        $a8=4+$j*6;
        $a9=5+$j*6;
        $a10=6+$j*6;
        
        
    }
        mysql_select_db($db3);
        if($count!=0)
        {
	$a17=$a17/$count;
        $a18=$a18/$count;
        $a19=$a19/$count;
        $a20=$a20/$count;
        $a21=$a21/$count;
        $a22=$a22/$count;

        if(!mysql_query("update $a1 set condition1='$a17',condition2='$a18',condition3='$a19',condition4='$a20',condition5='$a21',condition6='$a22' where cks='$a3[0]'"))
        {
            die('error5'.mysql_error());
        }
        mysql_select_db($db1);
        }
}
}
mysql_select_db($db3);
$query=mysql_query("select Teachers_name from teachers_list where ID='$a1'");

$row=mysql_fetch_array($query);
echo '<center><h4>Feedback for '.$row[0].' </h4><br/>';
echo '<table border=1 >';
echo '<tr><th>SL.NO</th>
    <th>Class</td>
    <th>Condition1</th>
    <th>Condition2</th>
    <th>Condition3</th>
    <th>Condition4</th>
    <th>Condition5</th>
    <th>Condition6</th>
<th>Avg</th></tr>';
$a22=mysql_num_fields(mysql_query("select * from $a1"));
for($i=1;$i<$a2[0];$i++)
{
    echo '<tr>';
    $result=mysql_query("select * from $a1 where slno=$i");
    while($row=mysql_fetch_array($result))
    {
        for($j=0;$j<=$a22;$j++)
        {
            
            
                if($j!=2&&$j!=$a22)
                {
                    echo '<td> '.$row[$j].' </td>';
                }
		if($j==$a22)
		{
		$avg=$row[3]+$row[4]+$row[5]+$row[6]+$row[7]+$row[8];
		$avg=($avg*100)/30;
		echo '<td>'.$avg.'</td>';
		}
           
            
        }
        
    }
    echo '</tr>';
}
echo '<table></center><br/><br/><br/><br/>'
?>
