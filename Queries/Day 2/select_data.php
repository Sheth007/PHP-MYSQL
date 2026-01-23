<?php

include('conn.php');

// Write a query to find the firstName, lastName, officeCode, officeCity, jobTitle of all the employees whose department is not 4 and 5
$qry1 = "SELECT firstName, lastName, officeCode, officeCity, jobTitle FROM employees 
        WHERE departmentID <> 4 AND departmentID <> 5";

// Write a query to find out the firstName, lastName, officeCode of employee whose salary is greater than 30000 and office code is 1
$qry2 = "SELECT firstName, lastName, officeCode FROM employees 
        WHERE salary > 30000 AND officeCode = 1";

// Write a query to find out the firstName, lastName of employee whose salary is greater than 50000
$qry3 = "SELECT firstName, lastName FROM employees 
        WHERE salary > 50000 ";

// Write a query to find out the total number of employee count whose salary is greater than 60000
$qry4 = "SELECT COUNT(*) AS totalEmployees FROM employees 
        WHERE salary > 60000 ";

// Write a query display firstName, lastName, email of all employee. Show all records ascending orderwise by firstName.
$qry5 = "SELECT firstName, lastName, email FROM employees ORDER BY firstName";

// Write a query to display firstName, lastName, email of employee whose salary is heigher.
// $qry6 = "SELECT firstName, lastName, email FROM employees ORDER BY salary desc LIMIT 1";
// OR
$qry6 = "SELECT firstName, lastName, email FROM employees WHERE salary = (SELECT MAX(salary) FROM employees)";

// Write a query to display firstName, lastName, email of employee whose salary is lower.
$qry7 = "SELECT firstName, lastName, email FROM employees ORDER BY salary LIMIT 1";
// OR
// $qry7 = "SELECT firstName, lastName, email FROM employees WHERE salary = (SELECT MIN(salary) FROM employees)";

// Write a query to display total of all employee's paid salary.
$qry8 = "SELECT SUM(salary) AS totalSalary FROM employees";

// Write a query to find out the total number of employee count whose job title is Sales Rep
$qry9 = "SELECT COUNT(jobTitle) AS totalSalesRepCount FROM employees 
        WHERE jobTitle LIKE 'Sales Rep'";

// Write a query to display firstName, lastName, email of employee whose joining date greather than 2020-01-01
$qry10 = "SELECT firstName, lastName, email FROM employees
        WHERE joinDate > '2020-01-01'";

// Write a query to display firstName, lastName, email, jogTitle of employee whose job title contains manager word
$qry11 = "SELECT firstName, lastName, email, jobTitle FROM employees 
        WHERE jobTitle LIKE '%manager%'";

// Write a query to find the firstName, lastName, email of all the employees whose job title is Sales Manager
$qry12 = "SELECT firstName, lastName, email, jobTitle FROM employees 
        WHERE jobTitle = 'Sales Manager'";

// Write a query to find the firstName, lastName, email of all the employees whose job title is Sales Manager and join date greater than 2021-01-01
$qry13 = "SELECT firstName, lastName, email, jobTitle FROM employees 
        WHERE jobTitle = 'Sales Manager' AND joindate > '2021-01-01'";

$res = mysqli_query($conn, $qry13);
$row = mysqli_num_rows($res);

// if ($row > 0) {
//     while ($row = $res->fetch_assoc()) {
//         // echo "Total <mark>Employees whose salary is more then ₹60,000</mark> are : <mark>" . $row['totalEmployees'] . "</mark>";
//         // echo "Total paid salary to all employees is : <mark>₹" . $row['totalSalary'] . "</mark>";
//         echo "Total working employees in Salse Rep is : <mark>" . $row['totalSalesRepCount'] . "</mark>";
//     }
// }

if ($row > 0) {
    echo "<table border='1'>";
    echo "<tr>
    <th>firstName</th>
    <th>lastName</th>
    <th>email</th>";
    echo "</tr>";

    while ($row = $res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['firstName'] . "</td>";
        echo "<td>" . $row['lastName'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data";
}

$conn->close();

?>