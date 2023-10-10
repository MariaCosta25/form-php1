<?php 

    $dbHost = 'Localhost';
    $dbUsername = 'aluno';
    $dbPassword = 'admin';
    $dbName = 'bd_formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   //     if ($conexao->connect_errno)
   //     {
   //         echo  "Erro";
   //     }
   //     else 
   //     {
   //         echo "Conexão efetuada com sucesso!";
   //     }

?>