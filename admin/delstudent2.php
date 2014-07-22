<?php
include('menu.php');
?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center>
    <form method="POST" action="delstudent3.php">
        <table>
            <tr>
                <td>
                    Enter Student ID:
                </td>
                <td>
                    <input type="text" class="tb7" name="studentID"/>
                </td>
            </tr>
        </table>
        <input type="submit" value="Delete Student"/>
    </form>
</center>
<?php
$k=$_POST['tableselect'];
setCookie("deltab",$k,time()+60*20);
?>