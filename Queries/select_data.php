<?php
include('./conn.php');

$select_data = "SELECT * FROM User WHERE Birthdate > '2000-12-12'";

$res = mysqli_query($conn, $select_data);
$row = mysqli_num_rows($res);

if ($row > 0) {
    echo "<table border='1'>";
    echo "<tr>
    <th>Id</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Password</th>
    <th>Birthdate</th>
    <th>Bio</th>
    <th>Status</th>";
    echo "</tr>";

    while ($row = $res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Id'] . "</td>";
        echo "<td>" . $row['Firstname'] . "</td>";
        echo "<td>" . $row['Lastname'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "<td>" . $row['Birthdate'] . "</td>";
        echo "<td>" . $row['Bio'] . "</td>";
        echo "<td>" . $row['Status'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Cannot select data";
}

$conn->close();
?>