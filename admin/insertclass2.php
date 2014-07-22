<?php
include('config.php');
include('menu.php');
ini_set('max_execution_time', 300);
$tab=$_POST['tableselect'];
$ab=mysql_fetch_row(mysql_query("select count(*) from $tab"));

$a1=$ab[0];


$k=mysql_num_fields(mysql_query("select * from $tab"));
$z=108;

if($k==27)
{
       for($i=$_POST['startp'];$i<=$_POST['endp'];$i++)
    {
        $a2=$_POST['rollp'].$i;
        if(!mysql_fetch_array(mysql_query("select slno from $tab where rollnumber='$a2'")))
        {
            for($l=1;$l<=6;$l++,$a1++)
            {
                
                if(!mysql_query("insert into $tab values('$a1','$a2','$a2',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)"))
                {
                    die('ERROR:'.mysql_error());
                }
                else
                {
                    $z=101;
                }
            }
            
        }
        else
        {
            echo '<br/><center>Rollno: '.$a2.' already exists';
        }
	
        
    }
}
else
{
    if($k==19)
    {
        for($i=$_POST['startp'];$i<=$_POST['endp'];$i++)
         {
            $a2=$_POST['rollp'].$i;
            if(!mysql_fetch_array(mysql_query("select slno from $tab where rollnumber='$a2'")))
            {   
        
                for($l=1;$l<=6;$l++,$a1++)
                {
                    if(!mysql_query("insert into $tab values('$a1','$a2','$a2',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)"))
                    {
                        die('ERROR:'.mysql_error());
                    }
                    else
                    {
                        $z=101;
                    }
                }
            }
            else
            {
                echo '<br/><center>Rollno: '.$a2.' already exists';
            }
        }
    }
 else
     {
         if($k==9)  
         {
            for($i=$_POST['startp'];$i<=$_POST['endp'];$i++)
            {
                $a2=$_POST['rollp'].$i;
                if(!mysql_fetch_array(mysql_query("select * from $tab where rollnumber='$a2'")))
                {
                    for($l=1;$l<=6;$l++,$a1++)
                    {
                        if(!mysql_query("insert into $tab values('$a1','$a2','$a2',0,0,0,0,0,0)"))
                        {
                              die('ERROR:'.mysql_error());
                        }
                         else
                        {
                            $z=101;
                        }
                    }
                }
                else
                {
                    echo '<br/><center>Rollno: '.$a2.' already exists';
                }
            }
          
            }
    }
}
if($z==101)
{
echo '<meta http-equiv="Refresh" content="5;url=insertclass1.php"/><center><h1>Inserted Successfully</h1></center>';
}
else
{
echo '<meta http-equiv="Refresh" content="5;url=insertclass1.php"/><center><h1>Insertion unsuccessful</h1></center>';
}
?>
<html>
<body>
<center>
<button class="tb8"><a href="insertclass1.php"/>Insert More</a></button>
</center>
</body>
</html>
