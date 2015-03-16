<?php

require_once ('connect.php');

function start() {
    $data = array();
    $data_task = array();
    $sql = connect()->prepare('SELECT name_project.id,name_project.name,task_list.description,task_list.task_id,task_list.id as id_task,task_list.status FROM name_project
                               LEFT JOIN task_list ON name_project.id=task_list.task_id ORDER BY id DESC');
    $sql->execute();
    $i=0;
    foreach ($sql->fetchAll() as $value) {
        $data[$value['id']] = $value;
        $data_task[$i][$value['task_id']]['descr'] = $value['description'];
        $data_task[$i][$value['task_id']]['id_task'] = $value['id_task'];
        $data_task[$i][$value['task_id']]['status'] = $value['status'];
        $i++;
    }
    return array($data,$data_task);
}



