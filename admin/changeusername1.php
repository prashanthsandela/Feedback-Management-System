<?php
include('menu.php');

?>
<center>
    <form action="changeusername2.php"     method="POST">
        <table>
            <tr>
                <td>
                    Enter the new username: 
                </td>
                <td>
                    <input type="text" class="tb7" name="newuser"/>
                </td>
            </tr>
            <tr>
                <td>
                    Enter the existing password: 
                </td>
                <td>
                    <input type="password" class="tb7" name="password"/>
                </td>
            </tr>
        </table>
        <input type="submit" value="Change Username" class="tb8"/>
    </form>
</center>