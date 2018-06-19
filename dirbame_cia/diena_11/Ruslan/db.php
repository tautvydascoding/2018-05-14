<?php
$con=mysqli_connect("localhost","survival","UzpleisaSukukyti","survival");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
$results = mysqli_query($con,"SELECT vardas,pavarde FROM dalyviai");
while ($row=mysqli_fetch_row($results))
    {
    printf ("<br> %s \n",$row[0]);
    echo json_encode($row);
    }
// foreach ($results as $row){
//     array_push($arr, $row['keyword']);
// }

// print_r($arr);

mysqli_close($con);
?>






// $server_name="localhost";
// $db_user="survival";
// $db_pass="UzpleisaSukukyti";
// $db="survival";
// $sql = "SELECT vardas FROM dalyviai";
// $result = mysqli_query($sql) or die ('Query Error: ' . mysql_error()); 
// foreach ($results as $row){
//     array_push($arr, $row['keyword']);
// }

// print_r($arr);
// ?>