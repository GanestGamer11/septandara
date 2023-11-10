<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //faço a conexão com sqlite e tauz
    $caminho = "database.sqlite";
    $db = new SQLite3($caminho);

    $q1c1 = isset($_POST['q1c1'])?$_POST['q1c1']:'';

    $q2c1 = isset($_POST['q2c1'])?$_POST['q2c1']:'';
    $q2c2 = isset($_POST['q2c2'])?$_POST['q2c2']:'';
    $q2c3 = isset($_POST['q2c3'])?$_POST['q2c3']:'';

    $q3i =  isset($_POST['q3i'])?$_POST['q3i']:'';

    $q4c1 = isset($_POST['q4c1'])?$_POST['q4c1']:'';
    $q4c2 = isset($_POST['q4c2'])?$_POST['q4c2']:'';
    $q4c3 = isset($_POST['q4c3'])?$_POST['q4c3']:'';
    $q4c4 = isset($_POST['q4c4'])?$_POST['q4c4']:'';
    $q4c5 = isset($_POST['q4c5'])?$_POST['q4c5']:'';
    $q4c6 = isset($_POST['q4c6'])?$_POST['q4c6']:'';

    $q5c1 = isset($_POST['q5c1'])?$_POST['q5c1']:'';
    $q5c2 = isset($_POST['q5c2'])?$_POST['q5c2']:'';
    $q5c3 = isset($_POST['q5c3'])?$_POST['q5c3']:'';
    $q5c4 = isset($_POST['q5c4'])?$_POST['q5c4']:'';
    $q5c5 = isset($_POST['q5c5'])?$_POST['q5c5']:'';
    $q5c6 = isset($_POST['q5c6'])?$_POST['q5c6']:'';

    $q6i = isset($_POST['q6i'])?$_POST['q6i']:'';
    
    $resposta = array("q1" => array($q1c1) , "q2" => array($q2c1, $q2c2, $q2c3), "q3" => $q3i, "q4" => array($q4c1, $q4c2, $q4c3, $q4c4, $q4c5, $q4c6), "q5" => array($q5c1, $q5c2, $q5c3, $q5c4, $q5c5, $q5c6), "q6" => $q6i);
    $resp = json_encode($resposta);

    // Exemplo de consulta SELECT
    $query = "INSERT INTO RESPOSTAS(resposta) VALUES ('$resp') ;";
    $db->exec($query);

    // Fechar a conexão
    $db->close();
    header("location: /");
}else{
    header("location: /contact.html");
}

?>