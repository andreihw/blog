<?php
require_once('../private/classes/database.class.php');

$posts = new Post;

$result = $posts->show_all_posts();
while ($row = $result->fetch_assoc()) {
echo "<a href='post.php?id={$row['id']}'>" . $row['title']. "</a>" . " - " . $row['date'] . "<br />" . $row['content'] . "<br /><br />";
}

$posts->count_total_posts();
echo "Total posts: " . $posts->total_posts;
?>
