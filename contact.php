<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //faço a conexão com sqlite e tauz
    $caminho = "database.sqlite";
    $db = new SQLite3($caminho);

    //carrego as variaveis
    //insiro na tabela
    
    // Exemplo de consulta SELECT
    $query = "SELECT * FROM sua_tabela";
    $result = $db->query($query);

    // Loop para imprimir os resultados
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        foreach ($row as $column => $value) {
            echo "$column: $value\t";
        }
        echo "\n";
    }

    // Fechar a conexão
    $db->close();
}else{
    header("location: /contact.html");
}

?>