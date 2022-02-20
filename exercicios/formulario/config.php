<?php
    $sbHost = 'Localhost';
    $dbUsername = 'root';
    $dbName = 'formulario-escola';
    $dbPassword = '';
    
     $conexao = new mysqli($sbHost,$dbUsername,$dbPassword,$dbName );
    
    $dbUsername = 'root';


    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else 
    {
        echo "Conexão efetuada com sucesso!";
    }
?>