<?php

    include_once('form-bd.php');
    if(isset($_POST['update']))
    {
        $idcliente = $_POST['idcliente'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        
     
        $sqlInsert = "UPDATE cliente SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco' WHERE idcliente=$idcliente";
      
      
        $result = $conexao->query($sqlInsert);
        }
    header('Location: sistema.php');

?>