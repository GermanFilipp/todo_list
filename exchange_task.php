<?php

require_once ('connect.php');

$id_first = $_POST['id_first'];
$id_second = $_POST['id_second'];
$addition_id = '999999';

connect()->prepare('UPDATE task_list SET id=:addition WHERE id=:id_first')->execute(array('id_first' => $id_first, 'addition' => $addition_id));
connect()->prepare('UPDATE task_list SET id=:id_first WHERE id=:id_second')->execute(array('id_second' => $id_second, 'id_first' => $id_first));
connect()->prepare('UPDATE task_list SET id=:id_second WHERE id=:addition')->execute(array('id_second' => $id_second, 'addition' => $addition_id));
echo json_encode(1);
