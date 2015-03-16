<?php

require_once ('connect.php');

$id_task = $_POST['id_task'];
$descr = $_POST['descr'];
$type = $_POST['type'];
if ($type == 1) {
    connect()->prepare('UPDATE name_project SET name=:descr WHERE id=:id')->execute(array('descr' => $descr, 'id' => $id_task));
} else {
    connect()->prepare('UPDATE task_list SET description=:descr WHERE id=:id')->execute(array('descr' => $descr, 'id' => $id_task));
}
echo json_encode(1);