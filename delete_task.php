<?php

require_once ('connect.php');
$id_task = $_POST['id_task'];

connect()->prepare('DELETE FROM task_list WHERE id=:id')->execute(array('id' => $id_task));
echo json_encode(1);