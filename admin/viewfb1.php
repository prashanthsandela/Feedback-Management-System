<?php
include('menu.php');
?>
<center>
    <form action="viewfb2.php" method="POST">
        <table>
            <tr>
                <td>
                    Select Teachers ID:
                </td>
                <td>
                    <select name="selectid" class="tb8">
                        
                     
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
        <input type="submit" value="View Feedback" />
    </form>
</center>