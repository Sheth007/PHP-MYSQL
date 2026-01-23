<?php
include('conn.php');

// Display all record of news and article table using UNION

/*
the rule of union
in union if you are fetching data from 2 diffrent tables then
make sure to select same data type colums only (i.e Each SELECT in a UNION must return the same number of columns, 
in the same order, with compatible data types in each column position.)
like in below query I selct article_id and news_id from 2 tables so it will work
but
as you can see I select author whose datatype is varchar and also selected published_date from news table whose datatype is data so this will both conflict
and you will get ERROR
so while selecting columns make sure both columns has to be same data type

now the second query works becasue I am assinging null to some columns why?
its because in article table I have article_id so I select that and in news I dont have that so I am telling query to assing null to article_id in second query 
so the schema of both stays same and will not give me error
*/

// $qry = "SELECT article_id, news_id, title, content, author FROM article
//         UNION
//         SELECT news_id, title, content, published_date FROM news";

$qry = "SELECT article_id, NULL as news_id, title, content, author, NULL as published_date FROM article
        UNION
        SELECT NULL as article_id, news_id, title, content, NULL as author, published_date FROM news";


$res = mysqli_query($conn, $qry);
$row = mysqli_num_rows($res);

if ($row > 0) {
    echo "<table border='1'>";
    echo "<tr>
    <th>article_id</th>
    <th>news_id</th>
    <th>title</th>
    <th>content</th>
    <th>author</th>
    <th>published_date</th>";
    echo "</tr>";

    while ($row = $res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['article_id'] . "</td>";
        echo "<td>" . $row['news_id'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['content'] . "</td>";
        echo "<td>" . $row['author'] . "</td>";
        echo "<td>" . $row['published_date'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Cannot select data";
}

$conn->close();
?>