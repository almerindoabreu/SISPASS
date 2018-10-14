<?php 
    
require_once("Util\config.php");

    
$encarregado = new Encarregado();
$encarregado->loadById(1);
echo $encarregado;

#$listaEncarregados = Encarregado::getList();
#echo json_encode($listaEncarregados, JSON_UNESCAPED_UNICODE);

?>