<?php

include('conn.php');

$alter_table = "ALTER TABLE employees 
    ADD CONSTRAINT fk_departmentID 
    FOREIGN KEY (departmentID) 
    REFERENCES department (departmentID)
";

$res = mysqli_query($conn, $alter_table);

if ($res) {
    echo "Table Altered Successfully";
} else {
    echo "Can not alter table";
}

$conn->close();
?>