<?php
if(!empty($listaAluno)){
foreach($listaAluno as $r ){
	$funcod=@$r->get('aluno-cod');
	echo $funcod;
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
<form class="form-horizontal" action='#' method=POST>
<div class="row">
<h1 class="text-center"> Cadastro Funcionário</h1>
  <div class="col-sm-9">
    
    <div class="row">
      <div class="col-xs-8 col-sm-6">
        <label for="inputEmail3" class="col-sm-2 control-label">Matícula</label>
      <div class="col-sm-10">
    
          <input type="text" class="form-control" id="exampleInputName2" name="aluno-matriculaNaEscola" placeholder="Matícula">
      </div>

        </div>
        <div class="col-xs-8 col-sm-6">
          <label for="inputPassword3" class="col-sm-2 control-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInputName2" name="aluno-nome" placeholder="Nome">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-8 col-sm-6">
        <label for="inputEmail3" class="col-sm-2 control-label">Data</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="exampleInputName2" placeholder="Data de nascimento">
      </div>

        </div>
        <div class="col-xs-8  col-sm-6">
          <label for="inputPassword3" class="col-sm-2 control-label">Endereço</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInputName2" placeholder="Endereço">
        </div>
      </div>
    </div>
  </div>


  <div class="col-sm-9 text-center">
      <div class="row">
        <div class="col-xs-8 col-sm-6">
           <div class="form-group">
             <div class="col-sm-offset-2 col-sm-8">
              <br><button type="submit" class="btn btn-default">Cadastrar</button>
             </div>
           </div>
        </div>
      
      </div>
    </div>
  </div>
</div>

</form>
