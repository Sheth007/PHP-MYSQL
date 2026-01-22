<?php

include('conn.php');

$insert_data_news = "INSERT INTO news (news_id, title, description, published_date) VALUES 
    (1, 'Breaking News: Market Crash', 'Stock market sees a significant crash today with major losses.', '2026-01-22'),
    (2, 'New Tech Innovation Launched', 'A new cutting-edge tech device has been launched today, promising a revolution in smart home devices.', '2026-01-21'),
    (3, 'Political Debate Heats Up', 'The latest political debate focuses on climate change and economic reform.', '2026-01-20'),
    (4, 'Global Sports Event Announced', 'A new international sports event has been announced, set to take place in 2027.', '2026-01-19'),
    (5, 'New Movie Release Breaks Records', 'The new blockbuster movie has broken box office records, becoming the highest-grossing film of the year.', '2026-01-18')";


$insert_data_article = "INSERT INTO article (article_id, news_id, title, content, author) VALUES
(1, 1, 'Stock Market Decline', 'The stock market has seen a sharp decline in recent hours, with major indices falling by over 5%. Experts suggest volatility ahead.', 'John Doe'),
(2, 2, 'Innovative Tech Product: A Game Changer', 'This new tech product is set to change the way we interact with our homes, integrating seamlessly with all major smart home systems.', 'Jane Smith'),
(3, 3, 'Climate Change Debate Intensifies', 'As the political debate heats up, the discussion around climate change becomes more polarizing, with some pushing for urgent action.', 'Michael Brown'),
(4, 4, 'The International Sports Event and Its Impact', 'This global sporting event promises to boost tourism, bring nations together, and provide a platform for athletes from all over the world.', 'Emily Davis'),
(5, 5, 'The Phenomenal Success of the New Movie', 'Breaking box office records, the film has captivated audiences worldwide, praised for its storytelling and groundbreaking visuals.', 'David Lee')";

$res = mysqli_query($conn, $insert_data_article);

if ($res > 0) {
    echo "Data Inserted in article DOne";
} else {
    echo "Not able to insert ther data";
}

mysqli_close($conn);
?>