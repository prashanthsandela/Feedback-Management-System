<?php
echo '    <body background="images/background2.jpg">';
include('config.php');
    $ab=mysql_fetch_row(mysql_query("select count(*) from admin_admin"));
 $abc=101;
    for($i=1;$i<=$ab[0];$i++)
    {
        $row1=mysql_fetch_array(mysql_query("select * from admin_admin where slno=$i"));
        if($row1['username']==$_POST['username'])
        {
            if($row1['password']==$_POST['password'])
            {
                setcookie("username",$_POST['username'],time()+60*$_POST['time']);
                echo '
                    <html><head><meta http-equiv="Refresh" content="5;url=adminloged.php"/></head>
                      <body><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <center><img src="images/loading.gif"/>
                <h1>Login Successfull</h1>
                </center></body></html>';
$abc=108;
                break;
            }
		
        }
        
    }

if($abc!=108)
	        {
	            echo '
	            <html><head><meta http-equiv="Refresh" content="4;url=index.php"/></head>
                      <body><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <center><img src="images/loading.gif"/>
        	    <h1>Wrong Username or Password</h1></body></html>';
	        }
            
    
?>