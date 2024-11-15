<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sistema de login</title>
	
	<link rel="stylesheet" href="login.css">

</head>


<body>
	
<a href="home.php" type="voltar" name="voltar"><h4><b>VOLTAR</b></h4></a> 
<br>
   

<div>

	<h1><b>Login</b></h1>
	<form action="testeLogin.php" method="POST">


		<input type="email" name="email" placeholder="Email">
		<br><br>
		<input type="Password" name="senha" placeholder="Senha">  
		<br><br>
		<input class="inputSubmit" type="submit" name="submit" value="Enviar">


	</form>  
</div>

</body>

</html>