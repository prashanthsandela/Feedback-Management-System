<?php
include('menu.php');
$c=$_COOKIE['username'];
$d=mysql_fetch_array(mysql_query("select * from admin_admin where slno=1"));
if($c==$d['username'])
{
echo '
<center>
    <form action="aliasuser2.php"     method="POST">
        <table>
            <tr>
                <td>
                    Enter the new alias username: 
                </td>
                <td>
                    <input type="text" class="tb7" name="aliasuser"/>
                </td>
            </tr>
            <tr>
                <td>
                    Enter the alias users password: 
                </td>
                <td>
                    <input type="password" class="tb7" name="aliaspassword"/>
                </td>
            </tr>
        </table>
        <input type="submit" value="Create User" class="tb8"/>
    </form>
</center>';
}
else
{
    echo '<center><h3>Your are not a super user to create a new alias user</h3></center>';
}
?>