<?php
include ('menu.php');
echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";
?>
<center>
    <form method="POST" action="delteacher2.php">
    <table>
    <tr>
    <td>Select Teacher:<br/></td>
    </tr>
	<tr>
    <td height=40 width=100 >
                <select name="teacherselect" class="tb8">
                <?php
                mysql_select_db($db3);
                $result=  mysql_query("select ID from teachers_list");
                while ($row = mysql_fetch_row($result)) 
                {
		  if($row[0]!='ID')
		{
                  echo '<option>'.$row[0].'</option>';
                }
                }   
                ?>    
                </select>
    </td>
</tr>
    </table>
    <input type="submit" value="Delete Teacher"/>
    </form>
    
</center>



