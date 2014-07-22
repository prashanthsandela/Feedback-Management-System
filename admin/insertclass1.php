<?php
include('menu.php');
echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";

?>
<form action="insertclass2.php" method="POST">
<center>
    <table>
        <tr align="left">
            <td>
                select the Class:
            </td>
            <td height=40 width=100 >
                <select name="tableselect" class="tb8">
                <?php
                $result=  mysql_query("show tables from $db1");
                while ($row = mysql_fetch_row($result)) 
                {
		  if($row[0]!='admin_admin'&&$row[0]!='teachers')
		{
                  echo '<option>'.$row[0].'</option>';
		}
                }   
                ?>    
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Enter the Roll No pattern:
            </td>
            <td>
                <input class="tb7" type="text" name="rollp"/>
            </td>
        </tr>
        <tr>
            <td>
                Enter the starting number( After the pattern):
            </td>
            <td>
                <input class="tb7" type="text" name="startp"/>
            </td>
        </tr>
        <tr>
            <td>
                Enter the ending pattern
            </td>
            <td>
                <input class="tb7" type="text" name="endp"/>
            </td>
        </tr>
        
    </table>
    <input type="submit" value="Insert into the table"/></center>
</form>
