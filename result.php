<?php
include_once('database.php');
$db=new database('train');
if(isset($_POST['btnsubmit']))
{
if($_POST['txts']==$_POST['txtd'])
{
  //echo "<script>alert('لا يجب ان تطابق محطة المغادرة محطة الوصول');</script>";
  header("location:train.php");
}
else
{
  $q="select * from trainsandstations where Station=? ;";
  $q1="select * from trainsandstations where Station=? ;";
  $rows=$db->getRows($q,array($_POST['txts']));
  $rows1=$db->getRows($q1,array($_POST['txtd']));
  }
  }
   $re=array();
 $re3=array();
 $d=0;   $ddd=0;
foreach($rows as $row)
{
  foreach($rows1 as $row1)
  {
     if($row['Train_Number']==$row1['Train_Number'])
     {
     $re[$d]=$row;
     $d+=1;
     }
  }
 }
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css" />
<link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>
<body>
    <div align="center" width="60%" height="50px">
<?php echo "<h3 class='hii'><span id='tt'><a href='train.php' class='btn btn-success'>Back</a></span>From<span class='rr'> ".$_POST['txts']."</span> to <span class='rr'>".$_POST['txtd']."</span> there is <span id='sp1'></span> trains </h3>" ?>
</div>
<table border="2">
<tr>
<th>Train</th>
<th>Rising</th>
<th>Arrival</th>
<th>Period</th>
<th>Speed</th>
<th>Type</th>
</tr>
<?php
 

    function unique_multidim_array($array, $key) {
    $temp_array = array();
    $i = 0;
    $key_array = array();
   
    foreach($array as $val) {
        if (!in_array($val[$key], $key_array)) {
            $key_array[$i] = $val[$key];
            $temp_array[$i] = $val;
        }
        $i++;
    }
    return $temp_array;
}
$result = unique_multidim_array($re,'Train_Number'); 
     //echo array_unique($re);
    $g=0;
    foreach($result as $re1)
    {
        
    if($_POST['trainame']=="All Trains")
    {
    echo "<tr>" ;
    $q1=$db->getRow("select * from trainsandstations where Station=? and Train_Number=? ;",array($_POST['txtd'],$re1['Train_Number']));
    echo "<td>".$re1['Train_Number']."</td>";
    echo "<td>".$re1['Time']."</td>";
    echo "<td>".$q1['Time']."</td>";
        $t1=$re1['Time'];$t2=$q1['Time'];
    echo "<td>".(abs(strtotime($t1)-strtotime($t2))/3600)." h"."</td>";
    $q2=$db->getRow("select * from speed where id=?;",array($re1['speed_id']));
    echo "<td>".$q2['km']." km".""."</td>";
    $q3=$db->getRow("select * from class where id=?;",array($re1['class_id']));
    echo "<td>".$q3['type']."</td>";
    echo "</tr>" ;
        $g+=1;
     }
        else
        {
            $q4=$db->getRow("select * from class where id=?;",array($re1['class_id']));
            switch($_POST['trainame'])
            {
                case 'VIP':
                    {
                        if($q4['type']=="VIP")
                        {
                          echo "<tr>" ;
    $q1=$db->getRow("select * from trainsandstations where Station=? and Train_Number=? ;",array($_POST['txtd'],$re1['Train_Number']));
    echo "<td>".$re1['Train_Number']."</td>";
    echo "<td>".$re1['Time']."</td>";
    echo "<td>".$q1['Time']."</td>";
        $t1=$re1['Time'];$t2=$q1['Time'];
    echo "<td>".(abs(strtotime($t1)-strtotime($t2))/3600)." h"."</td>";
    $q2=$db->getRow("select * from speed where id=?;",array($re1['speed_id']));
    echo "<td>".$q2['km']." km".""."</td>";
    $q3=$db->getRow("select * from class where id=?;",array($re1['class_id']));
    echo "<td>".$q3['type']."</td>";
    echo "</tr>" ;  
                            $g+=1;
                        }
                        
                        break;
                    }
                    case 'Air-conditioned':
                    {
                        if($q4['type']=="أولى وثانية مكيفة")
                        {
                          echo "<tr>" ;
    $q1=$db->getRow("select * from trainsandstations where Station=? and Train_Number=? ;",array($_POST['txtd'],$re1['Train_Number']));
    echo "<td>".$re1['Train_Number']."</td>";
    echo "<td>".$re1['Time']."</td>";
    echo "<td>".$q1['Time']."</td>";
        $t1=$re1['Time'];$t2=$q1['Time'];
    echo "<td>".(abs(strtotime($t1)-strtotime($t2))/3600)." h"."</td>";
    $q2=$db->getRow("select * from speed where id=?;",array($re1['speed_id']));
    echo "<td>".$q2['km']." km".""."</td>";
    $q3=$db->getRow("select * from class where id=?;",array($re1['class_id']));
    echo "<td>".$q3['type']."</td>";
    echo "</tr>" ;  
                             $g+=1;
                        }
                        break;
                    }
                    case 'Sleeping':
                    {
                        if($q4['type']=="نوم مكيف")
                        {
                          echo "<tr>" ;
    $q1=$db->getRow("select * from trainsandstations where Station=? and Train_Number=? ;",array($_POST['txtd'],$re1['Train_Number']));
    echo "<td>".$re1['Train_Number']."</td>";
    echo "<td>".$re1['Time']."</td>";
    echo "<td>".$q1['Time']."</td>";
        $t1=$re1['Time'];$t2=$q1['Time'];
    echo "<td>".(abs(strtotime($t1)-strtotime($t2))/3600)." h"."</td>";
    $q2=$db->getRow("select * from speed where id=?;",array($re1['speed_id']));
    echo "<td>".$q2['km']." km".""."</td>";
    $q3=$db->getRow("select * from class where id=?;",array($re1['class_id']));
    echo "<td>".$q3['type']."</td>";
    echo "</tr>" ;  
                             $g+=1;
                        }
                     break;   
                    }
                    case 'Special':
                    {
                        if($q4['type']=="مميز")
                        {
                          echo "<tr>" ;
    $q1=$db->getRow("select * from trainsandstations where Station=? and Train_Number=? ;",array($_POST['txtd'],$re1['Train_Number']));
    echo "<td>".$re1['Train_Number']."</td>";
    echo "<td>".$re1['Time']."</td>";
    echo "<td>".$q1['Time']."</td>";
        $t1=$re1['Time'];$t2=$q1['Time'];
    echo "<td>".(abs(strtotime($t1)-strtotime($t2))/3600)." h"."</td>";
    $q2=$db->getRow("select * from speed where id=?;",array($re1['speed_id']));
    echo "<td>".$q2['km']." km".""."</td>";
    $q3=$db->getRow("select * from class where id=?;",array($re1['class_id']));
    echo "<td>".$q3['type']."</td>";
    echo "</tr>" ;  
                             $g+=1;
                        }
                     break;   
                    }
                    
            }
        }
    }
    

?>
<script>
document.getElementById("sp1").innerHTML=<?php echo $g; ?>;
    
</script>
</table>
</body>
</html>

