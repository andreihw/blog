<?php
require_once('../private/classes/database.class.php');

$test = new Posts;

$result = $test->show_all_posts();
while ($row = $result->fetch_assoc()) {
echo $row['title'] . " - " . $row['date'] . "<br />" . $row['content'] . "<br /><br />";
}

$test->count_total_posts();
echo "Total posts: " . $test->total_posts;
?>
