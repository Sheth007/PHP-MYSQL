<?php

include('conn.php');

$create_table_news = "CREATE TABLE news(
    news_id INT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    published_date DATE
)";

$create_table_article = "CREATE TABLE article(
    article_id INT PRIMARY KEY,
    news_id INT,
    title VARCHAR(255),
    content TEXT,
    author VARCHAR(100),
    FOREIGN KEY (news_id) REFERENCES news(news_id)
)";

$res = mysqli_query($conn, $create_table_article);

if ($res) {
    echo "Table ARTICLE Created Successfully";
} else {
    echo "Can not create table";
}

$conn->close();
?>