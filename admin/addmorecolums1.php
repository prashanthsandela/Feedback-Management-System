<?php
include('menu.php');
include('config.php');


?>
<html>
    <body>
        <br/><br/><br/><br/><br/><br/>
        <form method="POST" action="addmorecolums2.php">
        <table align="center">
            <tr>
                <td>Subject Name:</td>
                <td><input type="text" name="subject"/></td>
            </tr>
            <tr>
                <td>TeacherID</td>
                <td><input type="text" name="teacher"/></td>
            </tr>
        </table>
            <center><input type="submit" value="Create"/></center>
        </form>
    </body>
</html>
