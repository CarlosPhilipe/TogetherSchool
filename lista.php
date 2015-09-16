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
			<h2>TELEFONE</h2>
		</td>
		<td>
			<h2>ENDERECO</h2>
		</td>
		<td>
			<h2>DT. ADM </h2>
		</td>
		<td>
			<h2>FUNCAO </h2>
		</td>
		<td>
			<h2>ACAO</h2>
		</td>
	</tr>";

	foreach($lista as $r){
		$d=explode('-',@$r->get('funadm'));
		$data="$d[2]/$d[1]/$d[0]";
		$dados.="
				<tr>
					<td id=td2>
					".$r->get('funcod')."
					</td>
					<td id=td2>
					".$r->get('funnome')."
					</td>
					<td id=td2>
					".$r->get('funtel')."
					</td>
					<td id=td2>
					".$r->get('funend')."
					</td>
					<td id=td2>
					".$data."
					</td>
					<td id=td2>
					".$r->get('funfuncao')."
					</td>
					<td id=td2>
					<span id=icon>
						<a href='?op=Fun&op2=update&funcod=".$r->get('funcod')."' title=editar><img src='imagens/edit_.png' id=icon></a>   
					</span>
					<span id=icon>
						<a href='?op=Fun&op2=del&funcod=".$r->get('funcod')."' title=deletar><img src='imagens/delete.png' id=icon></a>    
					</span>
				
					</td>
				</tr>
			";
		}
		$dados.="</table>";
		echo $dados;
	?>
	
	
	
<!-- <form id="dados_a_enviar" method="POST" target="_blank" action="relatorios/gerapdf.php">    
    <input type="hidden" name="dados" id="dados" value="<?PHP echo$dados;?>"/>
     <input type="hidden" name="rel" value="Funcionario"/>
     <input type="SUBMIT" VALUE="GERAR RELATORIO EM PDF" />
</form> -->
	
	
	
       