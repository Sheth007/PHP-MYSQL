<?php

include('conn.php');

$insert_data = "INSERT INTO Employees (Id, firstName, lastName, officeCode, officeCity, jobTitle, salary, email, joinDate, departmentID) VALUES
(1, 'John', 'Doe', 1, 'New York', 'Sales Rep', 25000, 'john.doe@email.com', '2020-05-12', 3),
(2, 'Jane', 'Smith', 2, 'Los Angeles', 'Manager', 55000, 'jane.smith@email.com', '2018-03-25', 4),
(3, 'Alice', 'Johnson', 1, 'New York', 'Sales Manager', 70000, 'alice.johnson@email.com', '2019-08-19', 3),
(4, 'Bob', 'Brown', 1, 'New York', 'Sales Rep', 30000, 'bob.brown@email.com', '2021-02-15', 3),
(5, 'Charlie', 'Davis', 3, 'Chicago', 'Sales Manager', 75000, 'charlie.davis@email.com', '2022-01-10', 3),
(6, 'David', 'Martinez', 2, 'Los Angeles', 'Director', 85000, 'david.martinez@email.com', '2017-11-23', 5),
(7, 'Emma', 'Taylor', 1, 'New York', 'Sales Rep', 22000, 'emma.taylor@email.com', '2020-09-10', 3),
(8, 'Frank', 'Anderson', 1, 'New York', 'Manager', 60000, 'frank.anderson@email.com', '2015-07-05', 4),
(9, 'Grace', 'Thomas', 3, 'Chicago', 'Sales Rep', 31000, 'grace.thomas@email.com', '2021-04-19', 3),
(10, 'Hannah', 'Jackson', 2, 'Los Angeles', 'Sales Rep', 20000, 'hannah.jackson@email.com', '2020-02-22', 3),
(11, 'Ivy', 'White', 1, 'New York', 'Sales Manager', 72000, 'ivy.white@email.com', '2021-05-09', 3),
(12, 'James', 'Harris', 3, 'Chicago', 'Sales Rep', 28000, 'james.harris@email.com', '2021-08-17', 3),
(13, 'Kevin', 'Martinez', 2, 'Los Angeles', 'Sales Rep', 24000, 'kevin.martinez@email.com', '2022-03-22', 3),
(14, 'Lily', 'Gonzalez', 1, 'New York', 'Manager', 67000, 'lily.gonzalez@email.com', '2018-06-30', 4),
(15, 'Mia', 'Wilson', 3, 'Chicago', 'Sales Rep', 29000, 'mia.wilson@email.com', '2019-01-12', 3)";

$res = mysqli_query($conn, $insert_data);

if ($res > 0) {
    echo "Data Inserted DOne";
} else {
    echo "Not able to insert ther data";
}

mysqli_close($conn);
?>