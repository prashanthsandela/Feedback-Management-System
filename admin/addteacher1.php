<?php
include('menu.php');
mysql_select_db($db3);
if(mysql_query("create table teachers_list(slno int(4),Teachers_name varchar(100),ID varchar(20))"))
{
    mysql_query("insert into teachers_list values(0,'Teacher Name','ID')") ;
}

?>

<form action="addteacher2.php" method="POST">
    <table align=center>
        <tr>
            <td>
                Enter Teachers ID:
            </td>
            <td>
                <input type="text" class="tb7" name="teacherID"/>
            </td>
        </tr>
        <tr>
            <td>
                Enter Teachers Name:
            </td>
            <td>
                <input type="text" class="tb7" name="teachername"/>
            </td>
        </tr>
    </table>
    <center><input type="submit" value="Create Teacher" class="tb8"/></center>
</form>