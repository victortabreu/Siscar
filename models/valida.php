<?php 
  namespace app\models;
  
  $email = $_POST['email'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  $connect = mysql_connect('localhost','root','');
  $db = mysql_select_db('siscar_db');
    if (isset($entrar)) {
             
      $verifica = mysql_query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("email",$email);
          header("Location:index.php");
        }
    }
?>