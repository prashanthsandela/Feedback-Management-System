<?php
include ('menu.php');
echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";
?>
<center>
    <form method="POST" action="delstudent2.php">
    <table>
    <tr>
    <td>Select Class:<br/></td>
    </tr>
	<tr>
    <td height=40 width=100 >
                <select name="tableselect" class="tb8">
                <?php
                $result=  mysql_query("show tables from $db1");
                while ($row = mysql_fetch_row($result)) 
                {
		  if($row[0]!='admin_admin'&&$row[0]!='teacher')
		{
                  echo '<option>'.$row[0].'</option>';
		}
                }   
                ?>    
                </select>
    </td>
</tr>
    </table>
    <input type="submit" value="Delete Student"/>
    </form>
    
</center>



