<?php
include('menu.php');
$a1=$_POST['tabsel'];
$k=mysql_num_fields(mysql_query("select * from $a1"));


    $a2=mysql_fetch_array(mysql_query("select * from $a1 where slno=0"));
    mysql_select_db($db2);
    if(!mysql_query("create table $a1(slno int(4),username varchar(20),password varchar(20))"))
    {
        die("ERROR1:".mysql_error());
    }
    
    if(!mysql_query("insert into $a1 values(0,'A00000','A00000')"))
    {
        die("ERROR1:".mysql_error());
    }
    for($i=3;$i<$k;$i++)
    {
        $a3='alter table '.$a1.' add column '.$a2[$i].' varchar(20)';

        if(!mysql_query($a3))
        {
            die(mysql_error());
        }
        else
        {
            
            $a4=$a2[$i];
	
            if(!mysql_query("update $a1 set $a4='$a4' where slno=0"))
            {
                die('ERROR'.mysql_error());
            }
            
        }
   
    }
    mysql_select_db($db1);
    $z=mysql_fetch_row(mysql_query("select count(*) from $a1"));
    
    
        if($k==27)
        {   for($i=1;$i<=$z[0];$i++)
            {
            mysql_select_db("$db1");
            $ab=mysql_fetch_array(mysql_query("select * from $a1 where slno=$i"));
            mysql_select_db($db2);
            if(!mysql_query("insert into $a1 values($i,'$ab[1]','$ab[2]','$ab[3]','$ab[4]','$ab[5]','$ab[6]','$ab[7]','$ab[8]','$ab[9]','$ab[10]','$ab[11]','$ab[12]','$ab[13]','$ab[14]','$ab[15]','$ab[16]','$ab[17]','$ab[18]','$ab[19]','$ab[20]','$ab[21]','$ab[22]','$ab[23]','$ab[24]','$ab[25]','$ab[26]')"))
            {
                die('ERROR'.mysql_error());
            }
            }
            echo "<center><h3>Created Successfully</h1></center>";
        }
        else
        {
            if($k==19)
            {   for($i=1;$i<=$z[0];$i++)
                {
                mysql_select_db("$db1");
            $ab=mysql_fetch_array(mysql_query("select * from $a1 where slno=$i"));
            mysql_select_db($db2);
            if(!mysql_query("insert into $a1 values($i,'$ab[1]','$ab[2]','$ab[3]','$ab[4]','$ab[5]','$ab[6]','$ab[7]','$ab[8]','$ab[9]','$ab[10]','$ab[11]','$ab[12]','$ab[13]','$ab[14]','$ab[15]','$ab[16]','$ab[17]','$ab[18]')"))
            {
                die('ERROR:'.mysql_error());
            }
                }
                echo "<center><h3>Created Successfully</h1></center>";
        
            }
            else
            {
                if($k==9)
                {for($i=1;$i<=$z[0];$i++)
                    {
                    mysql_select_db("$db1");
            $ab=mysql_fetch_array(mysql_query("select * from $a1 where slno=$i"));
            mysql_select_db($db2);
            if(!mysql_query("insert into $a1 values($i,'$ab[1]','$ab[2]','$ab[3]','$ab[4]','$ab[5]','$ab[6]','$ab[7]','$ab[8]')"))
            {
                die('ERROR:'.mysql_error());
            }
                    }
                    echo "<center><h3>Created Successfully</h1></center>";
                    
                }
            }
        }
    
?>