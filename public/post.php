<?php require_once('../private/classes/database.class.php'); ?>

<?php

$postdetails = new Post;
$res = $postdetails->show_post();
echo $res;
?>
