<?php

include_once('conexao.php');

$id = $_GET['id'];

$sql_exluir=mysqli_query($link , " DELETE FROM tbestudantes where id='$id' ");

if($sql_exluir==true){

echo " <script> 
    
alert('Estudante Excluido com Sucesso'); 
window.location.href='cadastroEst.php';

</script>";
}
else{

echo " <script> 

alert('Falha ao Excluir Estudante');
window.location.href='cadastroEst.php';

</script>";
}



?>