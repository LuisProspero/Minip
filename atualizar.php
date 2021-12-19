<?php

require_once('conexao.php');   // arquivo de conexao é ee q vai cria uma porta entre o sistema e o bd

$id = $_GET['id'];

$nome   =      $_POST['txt-nome'];
$nascimento   =      $_POST['txt-nascimento'];
$telefone    =      $_POST['txt-telefone'];
$endereco    =      $_POST['txt-endereco'];
$tipoDocu    =      $_POST['txt-tipoDocu'];
$numDocu=      $_POST['txt-numDocu'];
$escola =      $_POST['txt-escola'];
$curso =      $_POST['txt-curso'];
$turno=      $_POST['txt-turno'];




$sql_atualizar=mysqli_query($link , " UPDATE tbestudantes SET nome='$nome', nascimento='$nascimento', telefone='$telefone', endereco='$endereco', tipoDocu='$tipoDocu', numDocu='$numDocu', escola='$escola', curso='$curso', turno='$turno' WHERE id='$id' ");  // Atualiza os dados onde o id=id o codigo selecionado


if($sql_atualizar==true){  // se a atualização foi feita com sucesso 

    echo " <script> 
    
    alert('Estudante actualizado com Sucesso'); 
    window.location.href='cadastroEst.php';
    
    </script>";
}
else{
    
    echo " <script> 
    
    alert('Falha ao cadastrar estudante');
    window.location.href='editar.php';
    
    </script>";
}

?>