<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/format.css">
    <title>Document</title>
</head>
<body>

    <div id="conteudo_principal">
        <div class="postagens">
            
        </div>
    
    
        <center>
        <h1 class="titulos"> Cadastro/Estudantes</h1>
       <hr>
    

    <!--a tag form cria formulario em html . action é a ação e do documento onde sera feita a acção.
         e no login q vai nus permite se comunicar cm o bd  -->

         <!--metodo POST pega os dados leva para o doc de accao-->
         <form method="POST" action="cadastroE.php">
<!-- INPUT inseri o  nome dentro do formulario tem sempre um tipo neste caso é text, a variavel
     dentro fo formulario é name e atribuimos um nome -->
            <input type="text" name="txt-nome" placeholder="Digite o seu Nome"> 
            <input type="text" name="txt-nascimento" placeholder="nascimento"> <br><br>
          
            <input type="txt" name="txt-telefone" placeholder="Telefone">
            <input type="text" name="txt-endereco" placeholder="endereço">  <br><br>
           

           <!-- o tipo de input para nivel é de selecão-->
           tipoDocu 
           <select name="txt-tipoDocu">
            <option value="BI">B.I</option>
            <option value="PassaPort">PassaPort</option>
            <option value="SemDocumento">Sem Documento</option>  </select>

            <input type="txt" name="txt-numDocu" placeholder="Num/Documento"> <br><br>

                                            <h2>Dados Escolares</h2> <hr>
           <input type="text" name="txt-escola" placeholder="Nome da escola"> 
           <input type="text" name="txt-curso" placeholder="Curso"> <br><br>
		   <input type="text" name="txt-turno" placeholder="Turno"> <br><br>
		    <br ><br >


            <!-- a linha abaixo cria um input de botao do tipo submit subimeter, value q sign 
                valor q vai ser o nome do bot]ao -->
            <input type="submit" value="Cadastrar"> <br ><br >

        <!-- criando um link com uma ancora de ligação a outro documento -->
	   <a href="TelaPrincipal.php"> &larr;Volta na Página Inicial  </a>
</form>
</center>





	
</div>
<?php
include_once('conexao.php'); 
?>

<div id="recentes">
	<h1 class="titulos">Lista dos Estudantes</h1><hr>
	<div class="postagens_recentes">
		 
	<table rules="all">
	<thead>
		<tr>                   <!--  tr linha ROW linha horizontal-->
    <th> # </th>
    <th> Nome </th > &nbsp;
    <th>Nascimento </th>
     <th>Telefone</th>
	<!--<th>Endereço</th>
	<th>Tipo/Documento</th>      -->
	<th>Num/Documento</th>
	<th>Escola</th>
    <th>Curso</th>
    <th>Turno</th>
</tr>	
</thead>

<tbody>

    <?php
    
   $Sql_consulta=mysqli_query( $link , "SELECT *FROM tbestudantes " ); 
    
   $TOTAL =mysqli_num_rows($Sql_consulta);
    // While istrutura de repeticao ela faz consulta na tabela repeti tdas as consultas.  fecth array cri uma matriz p trazer os dados de forma organiza. no mysl dentro do  php . a variavel $dados traz os dados da maneira organizada array */

     while($dados=mysqli_fetch_array($Sql_consulta)) {
            ?>
    
       <!-- a tag <td> do html recebe os elementos duma tabela -->
       <tr>
   <td><?=  $dados [0] ?></td>
    <td><?= $dados [1] ?></td>
    <td><?= $dados [2] ?></td>
     <td><?= $dados [3] ?></td>
   <!-- <td><?= $dados [4] ?></td>
    <td><?= $dados [5] ?></td>  -->
    <td><?= $dados [6] ?></td>
    <td><?= $dados [7] ?></td>
    <td><?= $dados [8] ?></td>
    <td><?= $dados [9] ?></td>
    <td><a href="excluir.php?id=<?=  $dados[0]      ?>"> Excluir </a> </td>
    <td><a href="editar.php ?id=<?=  $dados[0]      ?>">Editar</a></td>
       </tr> 
    
    <?php }  ?> 
    
	
    </tbody> 
       
</table> 

<br>
<tr><td> TOTAL DE ESTUDANTES: <?=$TOTAL  ?>  </td></tr>
<br><br>
<a href="RelatorioEstudantes.php"> Imprimir  </a>
</div> 
</body>
</html>