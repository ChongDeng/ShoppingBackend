<?php
//建立一个数据库链接
$conn = new mysqli("localhost:3306","root","100866", "test_db") or die("链接数据库失败");

$query = "select * from family;";
$result = @$conn->query($query);
if (!$result){
    echo  "Error: Can't execute query about family";
    return;
}

$num = @$result->num_rows;
if($num == 0){
    return;
}

while($row = $result->fetch_assoc())
    echo "name:".$row['name']."\r\n";
?>
