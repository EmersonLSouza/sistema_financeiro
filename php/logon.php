<?php
// Recebendo os dados da tela

$email = $_POST['email'];
$password = $_POST['senha'];

//link da conexão

include 'conexao.php';

//Pegar os dados no banco
 
$sql = "SELECT * FROM tb_user WHERE email = '$email'";

$query = $conexao->query($sql);

$resultado = $query->fetch_assoc();


print_r($resultado);

$email_banco = $resultado['email'];
$senha_banco = $resultado['senha'];


if($email = $email_banco && $password == $senha_banco){
    header('location: tela_inicial.html');
}
else{
    echo"<script> alert ('Usuario ou senha invalida'); history.back(); </script>";
}


?>