<?php

    if(!empty($_GET['idcliente']))
    {
        include_once('form-bd.php');

        $idcliente = $_GET['idcliente'];

        $sqlSelect = "SELECT *  FROM cliente WHERE idcliente=$idcliente";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cliente WHERE idcliente=$idcliente";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>