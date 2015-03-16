<?php

require_once ('connect.php');


$id_task = $_POST['number_project'];
$description = $_POST['descr'];
$sql = connect()->prepare('INSERT INTO `task_list`(`task_id`, `description`) VALUES(:task_id, :description)')->execute(array('task_id' => $id_task, 'description' => $description));
$sql_id_task = connect()->prepare('SELECT id,description FROM task_list WHERE task_id=:task_id AND description=:description');
$sql_id_task->execute(array('task_id' => $id_task, 'description' => $description));
$result = $sql_id_task->fetch(PDO::FETCH_ASSOC);
echo json_encode($result);
