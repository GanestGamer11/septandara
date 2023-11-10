<?php

$caminho = "database.sqlite";
$db = new SQLite3($caminho);

$table = "CREATE TABLE IF NOT EXISTS RESPOSTAS(
    id INTEGER PRIMARY KEY,
    resposta TEXT
);";

$db->exec($table);

?>
