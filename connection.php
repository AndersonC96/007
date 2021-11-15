<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "007";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){// se a conexão falhou
        die("<b>Conexão falhou</b>: " . $conn->connect_error);
    }
    $sql = "CREATE TABLE IF NOT EXISTS films (_id INT(32) AUTO_INCREMENT PRIMARY KEY,
        filmname VARCHAR(256),
        imdb_id VARCHAR(256),
        poster VARCHAR(256),
        trailer VARCHAR(200)
    )";
    if($conn->query($sql) !== TRUE){// se a tabela não foi criada
        echo "<b>Erro ao criar banco de dados</b>: " . $conn->error;
    }
?>