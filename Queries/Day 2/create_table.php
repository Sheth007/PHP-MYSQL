<?php

include('conn.php');

$create_table = "create table employees(
    Id INT UNSIGNED PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Email VARCHAR(100),
    JobTitle VARCHAR(100),
    Salary DECIMAL(10, 2),
    OfficeCode INT,
    JoinDate DATE
    )";

$res = mysqli_query($conn, $create_table);

if ($res > 0) {
    return "Table Created Successfully";
} else {
    return "Can not create table";
}

$conn->close();
?>