<html>
<head>
        <meta http-equiv="Refresh" content="7;url=index.php"/>
    </head>
<body background="images/stripe2.png">
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center>
<p>
<font size="10" face="Impact" color="red">
Thank You!!
</font>
</p>
</center>
</body>
</html>

<?php
include('config.php');
$a1=$_COOKIE['selecttable'];
$a2=$_COOKIE['zoo'];
$a3=$_COOKIE['authentication'];
$a4=$_COOKIE['username'];
$a9=$_COOKIE['slnoof'];
$k=101;
    if($a2==12)
    {
        if(!mysql_query("create table $a4(slno varchar(20),username varchar(20),password varchar(20),c1 varchar(20),c2 varchar(20),c3 varchar(20),c4 varchar(20),c5 varchar(20),c6 varchar(20),c7 varchar(20),c8 varchar(20),c9 varchar(20),c10 varchar(20),c11 varchar(20),c12 varchar(20))"))
        {
            die('Error1:'.mysql_error());
        }
        for($a5=1;$a5<=12;$a5++)
        {
            for($a6=1;$a6<=6;$a6++)
            {
                $a7="select".$a5.$a6;
                $a[$a5][$a6]=$_POST[$a7];               
            }
        }
        for($i=1;$i<=6;$i++,$a9++)
        {
            mysql_select_db($db);
            $a101=$a[1][$i];$a102=$a[2][$i];$a103=$a[3][$i];$a104=$a[4][$i];$a105=$a[5][$i];$a106=$a[6][$i];$a107=$a[7][$i];$a108=$a[8][$i];$a109=$a[9][$i];$a110=$a[10][$i];$a111=$a[11][$i];$a112=$a[12][$i];;
            if(!mysql_query("insert into $a4 values($a9,'$a4','$a4',$a101,$a102,$a103,$a104,$a105,$a106,$a107,$a108,$a109,$a110,$a111,$a112)"))
            {
                die('ERROR2:'.mysql_error());
            }
            
            $row=mysql_fetch_array(mysql_query("select * from $a4 where slno=$a9"));
            mysql_select_db($db2);
            if(!mysql_query("delete from $a1 where slno=$a9"))
            {
                die('error21:'.mysql_error());
            }
            if(!mysql_query("insert into $a1 values($a9,'$a4','$a4',$row[3],$row[3],$row[4],$row[4],$row[5],$row[5],$row[6],$row[6],$row[7],$row[7],$row[8],$row[8],$row[9],$row[9],$row[10],$row[10],$row[11],$row[11],$row[12],$row[12],$row[13],$row[13],$row[14],$row[14])"))
            {
                die('ERROR3:'.mysql_error());
                
            }
            $k=123;
        }
         if($k==123)
            {
             mysql_select_db($db);
            if(!mysql_query("drop table $a4"))
                mysql_error();
            if(!mysql_query("delete from $a1 where username='$a4'"))
            {
                die(mysql_error());
            }
            }
        
        
    }
 else 
     {
        if($a2==8)
        {
            mysql_query("create table $a4(slno varchar(20),username varchar(20),password varchar(20),c1 varchar(20),c2 varchar(20),c3 varchar(20),c4 varchar(20),c5 varchar(20),c6 varchar(20),c7 varchar(20),c8 varchar(20))");
            for($a5=1;$a5<=8;$a5++)
            {
                for($a6=1;$a6<=6;$a6++)
                {
                    $a7="select".$a5.$a6;
                    $a[$a5][$a6]=$_POST[$a7];               
                }
            }
            for($i=1;$i<=6;$i++,$a9++)
            {
                mysql_select_db($db);
                $a101=$a[1][$i];$a102=$a[2][$i];$a103=$a[3][$i];$a104=$a[4][$i];$a105=$a[5][$i];$a106=$a[6][$i];$a107=$a[7][$i];$a108=$a[8][$i];
                if(!mysql_query("insert into $a4 values($a9,'$a4','$a4',$a101,$a102,$a103,$a104,$a105,$a106,$a107,$a108)"))
                {
                    die('ERROR4:'.mysql_error());
                }
            
                $row=mysql_fetch_array(mysql_query("select * from $a4 where slno=$a9"));
                mysql_select_db($db2);
                mysql_query("delete from $a1 where slno=$a9");
                if(!mysql_query("insert into $a1 values($a9,'$a4','$a4',$row[3],$row[3],$row[4],$row[4],$row[5],$row[5],$row[6],$row[6],$row[7],$row[7],$row[8],$row[8],$row[9],$row[9],$row[10],$row[10])"))
                {
                    die('ERROR5:'.mysql_error());
                    
                }
                $k=123;
            }
            if($k==123)
            {
            mysql_select_db($db);
            mysql_query("drop table $a4");
            if(!mysql_query("delete from $a1 where username='$a4'"))
            {
                die(mysql_error());
            }
            
            }
        }
        else
        {
            if($a2==3)
            {
            mysql_query("create table $a4(slno varchar(20),username varchar(20),password varchar(20),c1 varchar(20),c2 varchar(20),c3 varchar(20))");
            for($a5=1;$a5<=3;$a5++)
            {
                for($a6=1;$a6<=6;$a6++)
                {
                    $a7="select".$a5.$a6;
                    $a[$a5][$a6]=$_POST[$a7];               
                }
            }
            for($i=1;$i<=6;$i++,$a9++)
            {
                mysql_select_db($db);
                $a101=$a[1][$i];$a102=$a[2][$i];$a103=$a[3][$i];
                if(!mysql_query("insert into $a4 values($a9,'$a4','$a4',$a101,$a102,$a103)"))
                {
                    die('ERROR4:'.mysql_error());
                }
            
                $row=mysql_fetch_array(mysql_query("select * from $a4 where slno=$a9"));
                mysql_select_db($db2);
                mysql_query("delete from $a1 where slno=$a9");
                if(!mysql_query("insert into $a1 values($a9,'$a4','$a4',$row[3],$row[3],$row[4],$row[4],$row[5],$row[5])"))
                {
                    die('ERROR5:'.mysql_error());
                    
                }
                $k=123;
            }
            if($k==123)
            {
            mysql_select_db($db);
            mysql_query("drop table $a4");
            mysql_query("delete from $a1 where username='$a4'");
            }
                
            }
        }
    }

?>

