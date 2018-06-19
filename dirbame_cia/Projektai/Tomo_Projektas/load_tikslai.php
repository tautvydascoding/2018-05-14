<?php
include 'load_data.php';
header("Content-type: text/html; charset=utf-8"); 
$tikslaiNewCount = $_POST['tikslaiNewCount'];

$sql = "SELECT * FROM tikslai LIMIT $tikslaiNewCount";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h3>";
        echo $row['tikslas'];
        echo "</h3>";
    }
}else {
    echo "Tikslų nebėra.";
}
