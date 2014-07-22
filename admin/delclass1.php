<?php
include('menu.php');
?>


<center>
    <form action="delclass2.php" method="POST">
<table>
    <tr>
        <td>
            Delete table: 
        </td>
    
          <td height=40 width=100 >
                <select name="tableselect" class="tb8">
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
        <input type="submit" value="Delete Class"/>
        </form>
            
</center>            

