<?php
function connect() {
    $dsn = "mysql:host=topwot.mysql.ukraine.com.ua;dbname=topwot_todo;";
    return new PDO($dsn, 'topwot_todo', 'ct4esncc');
}

?>