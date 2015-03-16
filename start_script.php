<?php

require_once ('connect.php');

$post_name = $_POST['name_php'];
$sql = connect()->prepare('INSERT INTO `name_project`(`name`) VALUES(:name)')->execute(array('name' => $post_name));

echo json_encode(1);


