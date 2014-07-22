<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body background="images/background2.jpg" align=center>
<center>
	

<?php
include('config.php');

if(!isset($_COOKIE['username']))
{

echo '
<html><head><meta http-equiv="Refresh" content="1;url=login.php"/></head>
                      <body><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <center><img src="images/loading.gif"/>
        	    <h1>Your Session has expired. Login again.</h1>
</body></html>
';
}
else
{
$k=$_COOKIE['username'];
ini_set('max_execution_time', 300);
setcookie("username",$k,time()+20*60);
echo 'Logged In As: '.$_COOKIE['username'].'<br/>';
    echo '
<img src="images/mainlogo1.jpg" height=350 width=1100 align=center/>
	<br>
	<div class="menu">
		<ul>
			<li><pre>           </pre></li>
			<li><a href="adminloged.php" >Home</a></li>
			<li><a href="#" id="current">Teachers zone</a>
				<ul>
					
					<li><a href="addteacher1.php">Add Teacher</a></li>
					<li><a href="delteacher1.php">Remove Teacher</a></li>
<li><a href="viewfb1.php">view FeedBack</a></li>
					
			   	</ul>
		  	</li>
			<li><a href="#">Class</a>
                	<ul>
		                <li><a href="createclass1.php">Create a Class</a></li>
		                <li><a href="insertclass1.php">Insert into Class</a></li>
				<li><a href= "">Update a class</a></li>
		                <li><a href="delclass1.php">Delete Class</a></li>
				<li><a href="emptyclass1.php">Empty Class</a><li>
		                
				<li><a href="delstudent1.php">Delete a student</a></li>
		                
	                </ul>
        		</li>
			<li><a href="#">Settings</a>
			<ul>
	                <li><a href="changeusername1.php">Change Username</a></li>
	                <li><a href="changepassword1.php">Change Password</a></li>
                        <li><a href="aliasuser1.php">Create Alias User</a></li>
                        <li><a href="deleteuser.php">Delete User</a></li>
              		</ul>
			</li>
			
			
			
			<li><a href="#">Feedback</a>
			<ul>
			<li><a href="createafeedback1.php">Create FeedBack form for a class</a></li>
			
			<li><a href="removefeedback1.php">Remove FeedBack form for a class</a></li>

			</ul></li>
			
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>

</center>
</body>
</html>
';
}
?>