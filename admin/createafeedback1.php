<?php
include('menu.php');
?>
<center>
    <form action="createafeedback2.php" method="POST">
        <br/><br/><br/><br/><br/><br/><br/><br/>
    <table>
        <tr>
            <td>
                Select the Class for which feed back has to be made: 
            </td>
            <td height=40 width=100 >
                <select name="tabsel" class="tb8">
               <?php
                $result=  mysql_query("show tables from $db1");
                while ($row = mysql_fetch_row($result)) 
                {
		  if($row[0]!='admin_admin')
		{
                  echo '<option>'.$row[0].'</option>';
		}
                }   
                ?>
               </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="Create Feedback" class="tb8"/>
</form>
</center>