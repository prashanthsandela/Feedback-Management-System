<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<style type="text/css">
body { font:40}
body {
		margin-top: 60px;
		margin-right: 130px;
		margin-bottom: 60px;
		margin-left: 130px;
background: url(images/gradient-red.png);
	}
	
html{font-size:100.01%;background:#F8E088 url(images/stripe2.png);}
</style>
<body background="images/stripes2.png" color="white">


<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center>

<form method="POST" action="authentication.php">
<table >
<tr><td><pre> </pre></td></tr>
<tr><td rowspan="2"><img src="images/secure.png"/></td>

<td>
<pre><font face="Mistral" size="4" color="black">Username    </font></pre>
</td><td><input type="text" name="username" class="tb7" autocomplete="on"/></td>
</tr>

<tr><td>

<pre><font face="Mistral" size="4" color="black">Password     </font></pre> </td><td><input type="password" name="password" class="tb7"/></td>
</tr>
<tr><td><pre>      </pre></td>
    <td><font face="Mistral" size="4" color="black">
        Select Your Class:</font>
    </td>
    <td><select name="selecttable" class="tb8">
        <?php
        include('config.php');
        $result=  mysql_query("show tables from $db");
        while($row=  mysql_fetch_array($result))
        {
            echo '<option>'.$row[0].'</option>';
        }
        ?></select>
    </td>
</tr>
<tr><td><pre> </pre></td></tr>
</table>
    <input type="submit" Value="Login" class="submit button"/>
</form>
</center>
</body>
</html>


