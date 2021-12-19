<?php

include_once('conexao.php');

$html ='<table border=1>';

$html .='<thead>'; 

$html .='<tr>';  // criar uma linha onde vai estar os dados

$html .='<th>  #            </th>'; 
$html .='<th>  nome         </th>';
$html .='<th>  nascimento   </th>';
$html .='<th>  telefone     </th>';
$html .='<th>  endereco     </th>';
$html .='<th>  tipoDocu     </th>';
$html .='<th>  numDocu      </th>';
$html .='<th>  escola       </th>';
$html .='<th>  curso        </th>';
$html .='<th>  turno        </th>';
 

$html .='</tr>';

$html .='</thead>';


$lista=mysqli_query($link , "SELECT *FROM tbestudantes" ); 
    
//* While istrutura de repeticao ela faz consulta na tabela repeti tdas as consultas.  fecth array cri uma matriz p trazer os dados de forma organiza. no mysl dentro do  php . a variavel $dados traz os dados da maneira organizada array */

    while($dados=mysqli_fetch_array($lista)) {
        
        $html .='<body>';

        $html .='<tr>';

$html .='<th>' .$dados['0']. "</th>"; //o ponto serve como concatenaçaõ p/ ligar dos codigos diferentes
$html .='<th>' .$dados['1']. "</th>";
$html .='<th>' .$dados['2']. "</th>";
$html .='<th>' .$dados['3']. "</th>";  
$html .='<th>' .$dados['4']. "</th>";
$html .='<th>' .$dados['5']. "</th>";
$html .='<th>' .$dados['6']. "</th>";
$html .='<th>' .$dados['7']. "</th>";
$html .='<th>' .$dados['8']. "</th>";
$html .='<th>' .$dados['9']. "</th>";

$html .='</tr>';

        $html .='</body>';

}

$html .='</table >';

use Dompdf\Dompdf;   // php entende q esta ser usado os recusos da pasta dom


require_once 'dompdf/autoload.inc.php';    // incluindo ou requerer o documento

$dompdf = new DOMPDF();   //instaciar um obejeto p/ fazer uso de aguns procedimentos destes recursos

// codigo html
$dompdf  ->load_html ('


     <h1 style="text-aling: center;"> Relatório dos  Estudantes </h1>
     
    '.$html.'
    
    
    ');

    $dompdf -> render();   // o procedimento faz a exibição das informações
    $dompdf ->stream(


        "LISTA DOS ESTUDANTES",

        array(    // a instrução possibilita se a dowloand do arq pdf sera feita de forma autoomatica ou false
            "attachment" => false 
        )
        );
?>