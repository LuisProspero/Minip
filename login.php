<?php

require_once('conexao.php');

$usuario   =      $_POST['txt-usuario'];
$senha    =      $_POST['txt-senha'];

$sqlLogar=mysqli_query($link , "SELECT *FROM tbusuarios WHERE usuario='$usuario' and senha='$senha'" );

if(mysqli_num_rows($sqlLogar)!=0) {

    header('location:TelaPrincipal.php');
}
else{
    
    echo " <script> 
    
    alert('Usuário não Cadastrado');
    window.location.href='index.html';
    
    </script>";
}

?>