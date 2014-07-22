<?php
include ('menu.php');

ini_set('max_execution_time', 300);
$abc=$_COOKIE['classname'].'_'.$_POST['classname'].'_';
if($_POST['selectmonth']=='All')
{
    
$c1="Jan";$c2="Feb";$c3="Mar";$c4="Apr";$c5="May";$c6="Jun";$c7="Jul";$c8="Aug";$c9="Sept";$c10="Oct";$c11="Nov";$c12="Dec";
    for($x=1;$x<=12;$x++)
    {   $d='c'.$x;
        $c=$abc.$$d.'_'.$_POST['year'];
        $k=$_COOKIE["columns"];
        $a1='
        Create table '.$c.'(
        slno int(3),rollnumber varchar(12),password varchar(12)
        );
        ';
        
        echo '<center>Table name is: '.$c.'</center>';
        
        if(!mysql_query($a1))
        {
            echo ('Error:1'.mysql_error());
            echo '<center><font size=24>A table already exists with this 
name</font></center>';
        }
        else
        {mysql_query("insert into $c values(0,'A00000','A00000')");
            for($i=1;$i<=$k;$i++)
            {   $a='subject'.$i;
                $a2=$_POST[$a];
                    
                $a='teacher'.$i;
                $a3=$_POST[$a];	    
                    
                $a1='alter table '.$c.' add column '.$a2.' varchar(20)';
                    
                if(!mysql_query($a1))
                    {die(mysql_error());}
                    else
                    {
                        mysql_query("update $c set $a2='$a2' where slno=0");
                    }
                    
                $a1='alter table '.$c.' add column '.$a3.' varchar(20)';
                
                mysql_select_db($db3);
                $d=$c.$a2;
                $a10=mysql_fetch_row(mysql_query("select count(*) from $a3"));
                
                if(!mysql_query("insert into $a3 values($a10[0],'$d','$c',0,0,0,0,0,0)"))
                {
                    die('Error:2'.mysql_error());
                }
                mysql_select_db($db1);
                
                if(!mysql_query($a1))
                    {die(mysql_error());}
                     else
                    {
                        mysql_query("update $c set $a3='$a3' where slno=0");
                    }
            }
            Echo'<br/><br/><br/><br/><br/><br/><br/><center><h1>'.$c.' Table Created Successfully<br/></h1></center>';

        }

    }
}
else
{
        $c=$abc.$_POST['selectmonth'].'_'.$_POST['year'];
        $k=$_COOKIE["columns"];
        $a1='
        Create table '.$c.'(
        slno int(3),rollnumber varchar(12),password varchar(12)
        );
        ';
        echo '<center>Table name is: '.$c.'</center>';
        if(!mysql_query($a1))
        {
            die('Error:'.mysql_error());
            echo '<center><font size=24>A table already exists with this name</font></center>';
        }
        else
        {mysql_query("insert into $c values(0,'A00000','A00000')");
            for($i=1;$i<=$k;$i++)
            
            {  echo $i.'<br/>'.$k.'<br/>';
                $a='subject'.$i;
                $a2=$_POST[$a];
                    
                $a='teacher'.$i;
                $a3=$_POST[$a];	    
                    
                $a1='alter table '.$c.' add column '.$a2.' varchar(20)';
                    
                if(!mysql_query($a1))
                    {die(mysql_error());}
                     else
                    {
                        if(!mysql_query("update $c set $a2='$a2' where slno=0"))
                        {die('Error'.mysql_error());}
                    }
                    
                $a1='alter table '.$c.' add column '.$a3.' varchar(20)';
                
               mysql_select_db($db3);
                $d=$c.$a2;
                $query=mysql_query("select count(*) from $a3");
                if(!$query)
                    die(mysql_error ());
                $a10=mysql_fetch_row($query);
                
                if(!mysql_query("insert into $a3 values($a10[0],'$d','$c',0,0,0,0,0,0)"))
                {
                    die('Error:2'.mysql_error());
                }
                mysql_select_db($db1);
                
                if(!mysql_query($a1))
                    {die(mysql_error());}
                     else
                    {
                        mysql_query("update $c set $a3='$a3' where slno=0");
                    }
            }
            Echo'<br/><br/><br/><br/><br/><br/><br/><center><h1>'.$c.' Table Created Successfully<br/></h1></center>';

        }

}
?>
