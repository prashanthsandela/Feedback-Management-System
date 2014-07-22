<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>FeedBack Management</title>
    </head>
    
    <body font=20>
        <?php include('menu.php');
        ?><br/><br/><br/><br/><br/><br/><br/><br/>
        <form method="POST" action="createclass2.php">
            <table align="center">
                <tr><td>Select Year: </td>
                    <td>
			<select class="tb8" name="class_select">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4_1</option>
			<option>4_2</option>
		    </td>
			
                </tr>
<tr>
<td>Enter the group:</td>
<td><input type="text" name="group"/></td>
</tr>
            </table>
            <center>
            <input type="submit" value="Create Class"/>
            </center>
        </form>
    </body>
</html>