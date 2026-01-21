<?php

include('conn.php');

$create_table = "CREATE TABLE Employees (
    Id INT PRIMARY KEY,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    officeCode INT,
    officeCity VARCHAR(50),
    jobTitle VARCHAR(50),
    salary DECIMAL(10, 2),
    email VARCHAR(100),
    joinDate DATE,
    departmentID INT
)";

$res = mysqli_query($conn, $create_table);

if ($res > 0) {
    echo "Table Created Successfully";
} else {
    echo "Can not create table";
}

$conn->close();
?>