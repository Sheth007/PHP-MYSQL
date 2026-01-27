<?php
include('conn.php');

// Write a query to find the firstName, lastName, officeCode, officeCity, jobTitle of all the employees.
$qry1 = "SELECT firstName, lastName, officeCode, officeCity, jobTitle FROM employees";

// Write a query to find the firstName, lastName, officecode,
// officeCity of all the employees whose department is "4"
// USING LEFT JOIN
$qry2 = "SELECT firstName, lastName, officeCode, officeCity FROM employees
LEFT JOIN department ON employees.departmentId = department.departmentId WHERE department.departmentId = 4";

// Write a query to find the firstName, lastName, officecode,
// officeCity of all the employees whose department is "4"
// USING RIGHT JOIN
$qry3 = "SELECT firstName, lastName, officeCode, officeCity FROM employees
RIGHT JOIN department ON employees.departmentId = department.departmentId WHERE department.departmentId = 4";

// Write a query to find the firstName, lastName, officecode,
// officeCity of all the employees whose department is "4"
// USING INNER JOIN
$qry4 = "SELECT firstName, lastName, officeCode, officeCity FROM employees
INNER JOIN department ON employees.departmentId = department.departmentId WHERE department.departmentId = 4";

// Write a query to find the firstName, lastName, officecode,
// officeCity from employee and offices USING FULL JOIN
// ----------- SKIPPED -----------

// Write a query to find the firstName, lastName, email, joinDate
// of all the employees whose join date between 2019-01-01 to
// 2022-01-01
$qry6 = "SELECT firstName, lastName, email, joinDate FROM employees
    WHERE joindate BETWEEN '2019-01-01' AND '2022-01-01'";

// Write a query to find the firstName, lastName, email, joinDate
// of all the employees whose join date field have date.

// this below is for to check specific columns data type
$check = "SELECT DATA_TYPE FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'employees' AND column_name = 'joinDate'";

// Write a query to find the firstName, lastName, email, joinDate
// of all the employees whose join date is null
$qry8 = "SELECT firstName, lastName, email, joinDate FROM employees
    WHERE joinDate IS NULL";

// Write a query to find the firstName, lastName, officeCode,
// officeCity, jobTitle of all the employees whose department is 1
// and 3 using IN.
$qry9 = "SELECT firstName, lastName, officeCode, officeCity, joinDate FROM employees
    WHERE departmentID IN(1, 3)";

// for $check and $qry7 only

/*
$res = mysqli_query($conn, $check);
$col = mysqli_fetch_assoc($res);

if ($col && $col['DATA_TYPE'] === 'date') {
    $qry7 = "SELECT firstName, lastName, email, joinDate FROM employees";
    $res = mysqli_query($conn, $qry7);
    $row = mysqli_num_rows($res);
    if ($row > 0) {
        echo "<table border='1'>";
        echo "<tr>
            <th>firstName</th>
            <th>lastName</th>
            <th>email</th>
            <th>joinDate</th>";
        echo "</tr>";

        while ($row = $res->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['firstName'] . "</td>";
            echo "<td>" . $row['lastName'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['joinDate'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Cannot select data";
    }
}
*/

// for normal query execpt $check and $qry7
$res = mysqli_query($conn, $qry9);
$row = mysqli_num_rows($res);

if ($row > 0) {
    echo "<table border='1'>";
    echo "<tr>
    <th>firstName</th>
    <th>lastName</th>
    <th>officeCode</th>
    <th>officeCity</th>
    <th>joinDate</th>";
    echo "</tr>";

    while ($row = $res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['firstName'] . "</td>";
        echo "<td>" . $row['lastName'] . "</td>";
        echo "<td>" . $row['officeCode'] . "</td>";
        echo "<td>" . $row['officeCity'] . "</td>";
        echo "<td>" . $row['joinDate'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Cannot select data";
}

$conn->close();
?>