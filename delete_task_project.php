<?php
require_once('connect.php');

$id_project = $_POST['id_project'];

connect()->prepare('DELETE FROM name_project WHERE id=:id')->execute(array('id' => $id_project));
echo json_encode(1);