<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>
            FeedBack Management</title>
    </head>
    <body background="images/background2.jpg">
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center>
            <form method="POST" action="authenticated.php">
            <table>
                <tr>
                    <td rowspan="3"><img src="images/secure.png"</td>
                    <td>Username:</td>
                    <td><input type="text" name="username" class="td7" autocomplete="off"/></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" class="td7"/></td>
                </tr>
                <tr>
                    <td>Login upto(How many minutes)</td>
                    <td><input type="number" name="time" class="td7" value="60"/></td>
                </tr>
            </table>
            <input type="submit" value="Login"/>
            </form>
        </center>
    </body>
</html>

