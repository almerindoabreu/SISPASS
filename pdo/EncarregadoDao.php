<?php

        function cadastrar (Encarregado $encarregado){
            $conn = new PDO("mysql:host=localhost;dbname=db_sispass", "root", "");

            $stmt = $conn->prepare("INSERT INTO tb_encarregados (nome, matricula, turno, setor, telefone) 
                                VALUES (:NOME, :MATRICULA, :TURNO, :SETOR, :TELEFONE)");

            $stmt->bindValue(":NOME", $encarregado->getNome()); 
            $stmt->bindValue(":MATRICULA", $encarregado->getMatricula());
            $stmt->bindValue(":TURNO", $encarregado->getTurno());
            $stmt->bindValue(":SETOR", $encarregado->getSetor());
            $stmt->bindValue(":TELEFONE", $encarregado->getTelefone());

            $stmt->execute();

            echo "NOVO(A) ENCARREGADO CADASTRADO. <br/>";
            echo "BEM VINDO(A) <strong>" .$encarregado->getNome(). "</strong>";
    }
?>