<?php 
    require_once("Encarregado.php");
    require_once("pdo\EncarregadoDao.php");

    $encarregado = new Encarregado();

    $encarregado->setNome("Claudineia Oliveira");
    $encarregado->setMatricula("20180123");
    $encarregado->setTurno("DIURNO 2");
    $encarregado->setSetor("MPT EQSB");
    $encarregado->setTelefone("22996141427");

    cadastrar($encarregado);