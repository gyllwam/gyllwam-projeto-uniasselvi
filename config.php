<?php

 $dbHost='Localhost';
 $dbUsername='root';
 $dbPassword='';
 $dbName='formulario';

 $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

 //if($conexao->connect_errno)
 //{
 //  echo"ERRO";
 //}
 //else
 //{
  //  echo"conexao efetuada com sucesso";
 //}
 //o código da linha 10  á  linha 17 é somente para teste de conexão com o banco de dados?

 //ESSEE O ARQUIVO CONFIG.PHP  PARA CONEXAO COM O BANCO DE DADOS