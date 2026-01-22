<?php

include('conn.php');

$create_table = "CREATE TABLE department (
    departmentID INT PRIMARY KEY AUTO_INCREMENT,
    deptName VARCHAR(50)
)";

$res = mysqli_query($conn, $create_table);

if ($res) {
    echo "Table Created Successfully";
} else {
    echo "Can not create table";
}

$conn->close();
?>