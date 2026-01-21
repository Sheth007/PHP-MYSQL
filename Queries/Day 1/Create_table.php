<?php

include('conn.php');

$create_table = "create table User(
    Id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Firstname varchar(50),
    Lastname varchar(50),
    Password varchar(100),
    Birthdate date,
    Bio Text,
    Status enum ('Active','In-Active')
    )";

$res = mysqli_query($conn, $create_table);

if ($res > 0) {
    return "Table Created Successfully";
} else {
    return "Can not create table";
}

$conn->close();
?>