<?php
  //teste login.php 


session_start();


if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
   //ACESSO

   include_once 'config.php';
   $email=$_POST['email'];
   $senha=$_POST['senha'];
  

   // print_r('email: '. $email);
   // print_r('<br>');
   // print_r('senha: '. $senha);
   
    $sql="SELECT * FROM aluno WHERE email= '$email' and senha= '$senha'";

    $result= $conexao->query($sql);
 
   // print_r($sql);
   // print_r($result);

   if(mysqli_num_rows($result) <1 )
   {
     //print_r('não existe');
       unset($_SESSION['email']);
       unset($_SESSION['senha']);
       
       header('Location:login.php');
       
   }
   else
   {
     //print_r('existe');
       $_SESSION['email']=$email;
       $_SESSION['senha']=$senha;
       $logado = $_SESSION['email'] && $logado = $_SESSION['senha'];
       header('Location:sistema.php');
   }

}
else 
    {
       
       unset($_SESSION['email']);
       unset($_SESSION['senha']);
       header('Location:login.php');
       

}
 