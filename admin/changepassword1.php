<?php
include('menu.php');
?>
<center>
    <form action="changepassword2.php" method="POST">
        <table>
            <tr>
                <td>
                    Enter the current Password: 
                </td>
                <td>
                    <input type="password" class="tb7" name="oldpassword"/>
                </td>
            </tr>
            <tr>
                <td>
                    Enter New Password: 
                </td>
                <td>
                    <input type="password" class="tb7" name="newpassword"/>
                </td>
            </tr>
        </table>
        <input type="submit" value="Change Password" class="tb8"/>
    </form>
</center>