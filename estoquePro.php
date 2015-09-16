<br><br><br><br>

<head>
<style type="text/css">
	#icon{
		height: 30px;
		width: 30px;
	}
	#td2{
		
		text-align: center;
	}
</style>
</head>


<?php

$dados="
<table border=1 bgcolor=white>
	<tr>
		<td>
			<h2>COD</h2>
		</td>
		<td>
			<h2>NOME</h2>
		</td>
		<td>
			<h2>QTD(ML)</h2>
		</td>
		<td>
			<h2>QTD(UNID)</h2>
		</td>
	</tr>";

	foreach($estoquePro as $r){
		// $d=explode('-',@$r->get('funadm'));
		// $data="$d[2]/$d[1]/$d[0]";
		$dados.="
				<tr>
					<td id=td2>
					".$r->get('procod')."
					</td>
					<td id=td2>
					".$r->get('pronome')."
					</td>
					<td id=td2>
					".$r->get('proqtdml')."
					</td>
					<td id=td2>
					".$r->get('proqtdunid')."
					</td>
				</tr>
			";
		}
		$dados.="</table>";
		echo $dados;
	?>
	
	
	
<form id="dados_a_enviar" method="POST" target="_blank" action="relatorios/gerapdf.php">    
    <input type="hidden" name="dados" id="dados" value="<?PHP echo$dados;?>"/>
     <input type="hidden" name="rel" value="Perfume"/>
     <input type="SUBMIT" VALUE="GERAR RELATORIO EM PDF" />
</form>
	
	
	
       