<?php

include 'connect_db.php'; 
$school=$_GET['school'];
$sql_search="SELECT c.name,c.total_score FROM master m JOIN competition c ON m.school=c.school Where m.school=$school ORDER BY c.total_score DESC";
$result=mysqli_query($connect,$sql_search);
$b="";
$s="";
while($row=mysqli_fetch_array($result)){
    $b=$b."?".$row[0];
    $s=$s."!".$row[1];          
}   

echo $b."@".$s;
?>