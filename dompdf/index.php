<?php

	use Dompdf\Dompdf;
	use Sabberworm\CSS\Value\Size;

	//require __DIR__ . "/autoload.inc.php";

	$dompdf = new Dompdf();
	$dompdf->loadHtml($str, "<h1>Ola, Mundo!</h1>");

	$dompdf->setPaper( $size. "legal", $orientation = "landscape");

	$dompdf->render();

	var_dump($dompdf->output());