<?php
require_once('../private/classes/database.class.php');

$test = new Posts;
$test->count_total_posts();
echo "Total posts: " . $test->total_posts .  "<br /><br />";
echo "<pre>";
print_r($test->show_all_posts());
echo "</pre>";

?>
