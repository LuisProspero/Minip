<?php

require_once('conexao.php');   // arquivo de conexao é ee q vai cria uma porta entre o sistema e o bd
$usuario   =      $_POST['txt-usuario'];
$senha    =      $_POST['txt-senha'];
$email    =      $_POST['txt-email'];
$nivel    =      $_POST['txt-nivel'];

 // as instruções abaixo serve para teste
 /*echo "txt-usuario: $nusuario<br>";
 echo "txt-senha: $senha<br>";
 echo "txt-email: $email<br>";
 echo "txt-nivel"$nivel;
*/
// O CODIGO ABAIXO FOI CRRIADO UMA VARIAVEL a chamar a query onde ter instruç]ao mysql q permite gravar os dados no bd
$cadastro=mysqli_query($link , "INSERT INTO tbusuarios (usuario, senha, email, nivel) values ('$usuario', '$senha', '$email','$nivel') " );


if($cadastro==true){

    echo " <script> 
    
    alert('usuario Cadastrado com Sucesso'); 
    window.location.href='index.html';
    
    </script>";
}
else{
    
    echo " <script> 
    
    alert('Falha no Cadastrado do Usuário');
    window.location.href='cadastroUsu.html';
    
    </script>";
}

?>