<?php
include('conn.php');

// Display all record of news and article table using UNION
// $qry = "SELECT article_id, news_id, title, content, author FROM article
//         UNION
//         SELECT news_id, title, content, published_date, null FROM news";

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