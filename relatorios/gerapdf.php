<?php
	require_once("dompdf/dompdf_config.inc.php");
		
	$conteudo = $_REQUEST['dados'];
	$conteudo .= utf8_decode("<h1>Relatorio ".$_REQUEST['rel'])."</h1><br>";
	$relatorio = utf8_decode($_REQUEST['rel']);
	//echo $relatorio;
	$conteudo="	
	<table>$conteudo</table>";
	//ECHO $_POST['dados']."<BR>".$conteudo;
//die("");
	$dompdf = new DOMPDF();
	
  $dompdf->load_html($conteudo);
  $dompdf->set_paper("a4", "landscape");
  $dompdf->render();
  $dompdf->stream("$relatorio.pdf");
?>