<?php
include('menu.php');
mysql_select_db("db2");

?>
<center> <br/><br/><br/><br/><br/><br/><br/><br/><br/>
<form action="removefeedback2.php" method="POST">
    <table>
        <tr>
           <td> Select the class to be removed from feedback:</td>
           <td>
               <select name="selecttable" class="tb8">
                   <?php
                   $result=mysql_query("show tables from $db2");
                   while($row=  mysql_fetch_array($result))
                   {
                      echo '<option>'.$row[0].'</option>';
                   }
                   ?>
               </select>
           </td>
        </tr>
        
    </table>
    <input type="submit" value="Delete Class from Feedback" class="tb8"/>
</form>
    </center>