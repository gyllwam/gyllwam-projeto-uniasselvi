<?PHP
//projeto.php


if(isset($_POST['submit']))
{
    // print_r('Nome: ' . $_POST('nome'));
    //print_r('<br>');
    //print_r('Email: ' . $_POST['email']);
    //print_r('Telefone: ' . $_POST['telefone']);
    // print_r('sexo: ' . $_POST['sexo']);
    // print_r('data_nascimento: ' . $_POST['data_nascimento']);
    //print_r('cidade: ' . $_POST['cidade']);
    //print_r('estado: ' . $_POST['estado']);
    //print_r('endereco: ' . $_POST['endereco']);

   include_once 'config.php';

   $nome=$_POST['nome'];
   $senha=$_POST['senha'];
   $email=$_POST['email'];
   $telefone=$_POST['telefone'];
   $sexo=$_POST['sexo'];
   $data_nascimento=$_POST['data_nascimento'];
   $cidade=$_POST['cidade'];
   $estado=$_POST['estado'];
   $endereco=$_POST['endereco'];

   $result= mysqli_query($conexao,"INSERT INTO aluno(nome,senha,email,telefone,sexo,data_nascimento,cidade,estado,endereco)
   VALUES('$nome','$senha','$email','$telefone','$sexo','$data_nascimento','$cidade','$estado','$endereco')");

   header('Location: login.php');

   

}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        --projeto5°período--
    </title>


<link rel="stylesheet" href="projetop.css">
</head>
<body>

  
	
    <a href="home.php"><h3><b>VOLTAR</b></h3></a> 


   <br>
    
    <div class="box">
         <form action="projetop.php" method="POST">
            
            <fieldset color="blue" borde-radio="15px">

                <legend><b><h4>FORMUlÁRIO DE CADASTRO</h4></b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput"><b>Nome completo</b></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="Password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput"><b>Senha</b></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput"><b>Email</b></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="telefone" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput"><b>telefone</b></label>
                </div>
                

                <p><b><h4>Sexo:</h4></b></p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino"class="labelInput2"><b>Feminino</b></label>
                
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino"class="labelInput2"><b>Masculino</b></label>
                
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro"class="labelInput2"><b>Outro</b></label>
                
                
                    <label for="data_nascimento"><b><h4>Data de nascimento:</h4></b></label>
                    <input type="date" name="data_nascimento"class="labelInput3" id="data_nascimento"required>
                
                    <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput"><b>Cidade</b></label>
                    </div>
                    <br>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput"><b>Estado</b></label>
                    </div>
                    <br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput"><b>Endereço</b></label>
                    </div>
                    <br>
                    <input type="submit" name="submit" id="submit">
          </fieldset>
        
    </div>
   
    


   
</body>
</html>