<?php
    $conn = new PDO("mysql:host=localhost;dbname=db_sispass", "root", "");

    $stmt = $conn->prepare("SELECT * FROM tb_encarregados ORDER BY nome");

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row){
        foreach ($row as $key => $value){
            echo "<strong>" . $key . "</strong>" . $value . "<br/>";
        }

        echo "====================================================== <br/>";
    }
?>