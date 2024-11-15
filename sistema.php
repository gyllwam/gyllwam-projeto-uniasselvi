<?php
 session_start();
  //print_r($_SESSION);
  if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha'])== true))
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
  	header('Location:login.php');
    

  }
  
    $logado = $_SESSION['email'];
    
  
     
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sistema.css">
</head>
<body>


<a href="home.php"><b>SAIR</b></a> 
<br>
<br>
<br>
<fieldset >
    <br>
    <br>
    
</div>

   <div class="area">
    <div class="container">
        <h1>Calculador de IMC</h1>
        <div class="input_area">
            <h2>Altura (cm) </h2>
            <input id="height" type="number">
        </div>
        <div class="input_area">
            <h2>Peso (kg) </h2>
            <input id="weight" type="number">
        </div>
        <button onclick="calculate()"><B>CALCULAR</B></button>
        <textarea name="" id="text_area" rows="8"></textarea>
        </div>
       
    </div>  
    <script src="sistema.js"></script><br>
    <br>

</fieldset>
<br>
<br>
<br>
<a href="segundo.arq.sistem.php"><b>IR PARA A LISTA DE CADASTRADOS</b></a>


</body>
</html>


