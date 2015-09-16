<?php
if(!empty($listaAluno)){
foreach($listaAluno as $r ){
	$funcod=@$r->get('funcod');
	$funtel=@$r->get('funtel');
	$funend=@$r->get('funend');
	$funnome=@$r->get('funnome');
	$funadm=@$r->get('funadm');
	$funfuncao=@$r->get('funfuncao');
//$qtd=@$r->get('qtd');

}
}
?>
<?php
function selected( $value, $selected ){
    return $value==$selected ? ' selected="selected"' : '';
}
?>
<html>
<head>
	<style >
	#input1{
		
		float: right;
		margin-right: 250px;
		margin-top: -4px;
		height: 20px;
		width: 250px;
		vertical-align: middle;
		text-align: center;
		border-color: lightgreen;
		border-style: outset;		
	}
	#input2{
		
		margin-left: 140px;
		width: 250px;
		vertical-align: middle;
		text-align: right;
		
	}
	#input3{
		
		float: left;
		margin-left: 10px;
		width: 100px;
		vertical-align: middle;
		text-align: center;
		border-radius: 10px;
		border-style: inset;
		border-color: gray;
		background: #E6E8FA;
		
	}
	#b2{
		
		margin-left: 140px;
		width: 250px;
		vertical-align: middle;
		text-align: center;
		
	}

	#select2{
		
		float: right;
		margin-right: 250px;
		margin-top: -2px;
		height: 20px;
		width: 250px;
		vertical-align: middle;
		text-align: center;
		border-color: lightgreen;
		border-style: outset;		
	}


	</style>
</head>
</html>




<form action='' method=POST>
<br><br><br>
<table border width=800 align=center bgcolor="white">
	<tr>
		<td colspan=2 align=center>
			<h1>ALUNO</h1>
		</td>
	</tr>
	<tr>
		<td>
		<hr color=lightgray size="3">
			<b>NOME:</b>
			<input id="input1" name=funnome value='<?php echo @$funnome;?>' required>
			<hr color=lightgray size="3">
			<b>ENDERECO:</b>
			<input id="input1" name=funnome value='<?php echo @$funnome;?>' required>
			<hr color=lightgray size="3">
			<b>SEXO:</b>
			<input id="input1" name=funnome value='<?php echo @$funnome;?>' required>
			<hr color=lightgray size="3">
			<b>DATA NASCIMENTO:</b>
			<input id="input1" name=funnome value='<?php echo @$funnome;?>' required>
			<hr color=lightgray size="3">
			<b>MATRICULA:</b>
			<input id="input1" name=funnome value='<?php echo @$funnome;?>' required>
			<hr color=lightgray size="3">
			<b>TURMA:</b>
			<select name="te" id="select2">
    			<option value="">Escolha</option>
    			<option value="">TCIP1</option>
    			<option value="">TCIP2</option>
    			<!-- <option value="masculino"<?php echo selected( 'masculino', $sexo ); ?>>Masculino</option>
    			<option value="feminino"<?php echo selected( 'feminino', $sexo ); ?>>Feminino</option> -->
			</select>
			<hr color=lightgray size="3">
	<!-- Para cada funcionário o sistema deverá armazenar seu nome, fone, data de admissão e endereço. -->
	<!-- <tr>
		<td colspan=2>
			<b>SITUACAO : </b><?php echo @$sit;?>
		</td>
	</tr>-->
	<tr> 
		<td>
			<input id="input3" type=submit  value="Salvar" >
		
			<input id="input3" type=reset value="Cancelar" onClick="location.href='index.php'">
		</td>
	</tr>
</table>

<input type=hidden name="op" value="Aluno">
<input type=hidden name="op2" value="calcAluno">
<input type=hidden name=funcod value=<?php echo @$funcod;?>>


</form>
