<?php
include('menu.php');
$k='MGIT_'.$_POST['class_select'].'_'.$_POST['group'];

echo '
<html><head>
    <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
<form action="createclass3.php" method="POST">
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<table align=center>
<tr colspan="4">
                    <td>
                        <bold>ClassName:</bold>
                    </td>
                    <td>
                        '.$k.'_<input type="text" class="td7" name="classname"/>
                    </td>
</tr> 

<tr><td>Create For Months : </td><td>
<select class="tb8" name="selectmonth">
<option>All</option>
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>Apr</option>
<option>May</option>
<option>Jun</option>
<option>Jul</option>
<option>Aug</option>
<option>Sept</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option>
</select>

</td></tr>
<tr><td>For Year:</td><td><input type="text" name="year" class="tb7"/></td></tr>
    '; 
if($_POST['class_select']=='1')
{$j=12;}
else
{
    if($_POST['class_select']=='4_2')
    {
        $j=3;
    }
    else
    {
        $j=8;
    }
}
setcookie("columns", $j, time()-60*60);
setcookie("columns",$j,time()+60*60);
setcookie("classname",$k,time()+60*60);
for($i=1;$i<=$j;$i++)
{
  echo '<tr><td>Subject'.$i.':</td><td><input type="text" name="subject'.$i.'" class="tb7"/>
<td>Teacher ID:</td>      <td><input type="text" class="tb7" name="teacher'.$i.'"/>
</tr>';  
  
}
echo '
</table>
<center>
    <input type="submit" value="Create Table"/>
    <input type="reset" value="Reset Fields"/>
</center>
</form>
</body>
</html>';



?>















