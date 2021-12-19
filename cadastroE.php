<?php

require_once('conexao.php');   // arquivo de conexao é ee q vai cria uma porta entre o sistema e o bd
$nome   =      $_POST['txt-nome'];
$nascimento   =      $_POST['txt-nascimento'];
$telefone    =      $_POST['txt-telefone'];
$endereco    =      $_POST['txt-endereco'];
$tipoDocu    =      $_POST['txt-tipoDocu'];
$numDocu=      $_POST['txt-numDocu'];
$escola =      $_POST['txt-escola'];
$curso =      $_POST['txt-curso'];
$turno=      $_POST['txt-turno'];



// O CODIGO ABAIXO FOI CRRIADO UMA VARIAVEL a chamar a query onde ter instruç]ao mysql q permite gravar os dados no bd
$cadastro=mysqli_query($link , "INSERT INTO tbestudantes (nome, nascimento, telefone, endereco, tipoDocu, numDocu, escola, curso, turno) values ('$nome', '$nascimento','$telefone','$endereco','$tipoDocu','$numDocu','$escola','$curso','$turno') ");


if($cadastro==true){

    echo " <script> 
    
    alert('usuario Cadastrado com Sucesso'); 
    window.location.href='cadastroEst.php';
    
    </script>";
}
else{
    
    echo " <script> 
    
    alert('Falha ao cadastrar estudante');
    window.location.href='cadastroEst.php';
    
    </script>";
}

?>