<?php
include_once('conexao.php');

    $id = $_GET['id'];                         // where id='$id' 

$Sql_consulta=mysqli_query($link , " SELECT * FROM tbestudantes WHERE id='$id' ");

$dados = mysqli_fetch_array($Sql_consulta);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <center>
   
        <h2>EDITAR ESTUDANTE</h2>
        <hr><br>
        

    <!--a tag form cria formulario em html . action é a ação e do documento onde sera feita a acção.
         e no login q vai nus permite se comunicar cm o bd  -->

         <!--metodo POST pega os dados leva para o doc de accao-->
         <form method="POST" action="atualizar.php">
             
             <imput type="hidden" name="id" value='<?= $dados[0] ?>' >

<!-- INPUT inseri o  nome dentro do formulario tem sempre um tipo neste caso é text, a variavel
     dentro fo formulario é name e atribuimos um nome -->
            <input type="text" name="txt-nome" placeholder="Digite o seu Nome" value='<?= $dados [1] ?>' > 
            <input type="text" name="txt-nascimento" placeholder="nascimento" value='<?= $dados [2] ?>' > <br><br>
          
            <input type="txt" name="txt-telefone" placeholder="Telefone"value=' <?= $dados [3] ?>' >
            <input type="text" name="txt-endereco" placeholder="endereço"value=' <?= $dados [4] ?> '>  <br><br>
           

           <!-- o tipo de input para nivel é de selecão-->
           tipoDocu 
           <select name="txt-tipoDocu">

               <option value='<?= $dados[5] ?>'> <?= $dados[5] ?></option>
            <option value="BI">B.I</option>
            <option value="PassaPort">PassaPort</option>
            <option value="SemDocumento">Sem Documento</option>  </select>

            <input type="txt" name="txt-numDocu" placeholder="Num/Documento"value='<?= $dados [6] ?> '> <br><br>

                                            <h2>Dados Escolares</h2> <hr>
           <input type="text" name="txt-escola" placeholder="Nome da escola"value='<?= $dados [7] ?> ' > 
           <input type="text" name="txt-curso" placeholder="Curso"value='<?= $dados [8] ?> '> <br><br>
		   <input type="text" name="txt-turno" placeholder="Turno"value='<?= $dados [9] ?> '> <br><br>
		    <br ><br >


            <!-- a linha abaixo cria um input de botao do tipo submit subimeter, value q sign 
                valor q vai ser o nome do bot]ao -->
            <input type="submit" value="Atualizar"> <br ><br >

        <!-- criando um link com uma ancora de ligação a outro documento -->
	   <a href="TelaPrincipal.php"> &larr;Volta na Página Inicial  </a>
</form>
</center>
</body>
</html> 