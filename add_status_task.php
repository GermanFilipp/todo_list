<?php

require_once ('connect.php');

$id_task = $_POST['id_task'];
switch($_POST['type']) {
    case 0: connect()->prepare('UPDATE task_list SET status=0 WHERE id=:id')->execute(array('id' => $id_task));break;
    case 1: connect()->prepare('UPDATE task_list SET status=1 WHERE id=:id')->execute(array('id' => $id_task));break;
}
echo json_encode(1);