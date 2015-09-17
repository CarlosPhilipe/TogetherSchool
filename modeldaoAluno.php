<?php
	require_once('UUID.php');
	require_once('controllerAluno.php');
	require_once('conection.php');

class modeldaoAluno extends conection{
	function __construct(){
		parent::__construct();
		$this->createtableAluno();
		
	}
	
	public function calcAluno(modelben $o){
		return $o->get('funcod');
	}
	public function especificoAluno(modelben $o){
		$query="select * from 
		funcionarios where funcod=".$o->get('funcod'); 
		
		$data=$this->o_db->query($query);
		$listaAluno=array();
		while($r=$data->fetchObject()){
			$c=new controllerAluno();
			$c->set('funcod',$r->funcod);
			$c->set('funtel',$r->funtel);
			$c->set('funend',$r->funend);
			$c->set('funnome',$r->funnome);
			$c->set('funadm',$r->funadm);
			$c->set('funfuncao',$r->funfuncao);
			// $c->set('qtd',$r->qtd);
			//$c->set('total',($r->qtd*11));
			array_push($listaAluno,$c);
		}
		return $listaAluno;
	}
	public function listaAluno(modelben $o){
		$query="select * from funcionarios";
		$data=$this->o_db->query($query);
		$listaAluno=array();
		while($r=$data->fetchObject()){
			$c=new controllerAluno();
			$c->set('funcod',$r->funcod);
			$c->set('funtel',$r->funtel);
			$c->set('funend',$r->funend);
			$c->set('funnome',$r->funnome);
			$c->set('funadm',$r->funadm);
			$c->set('funfuncao',$r->funfuncao);
			// $c->set('qtd',$r->qtd);
			// $c->set('total',($r->qtd*11));
			array_push($listaAluno,$c);
		}
		return $listaAluno;
	}
	public function delAluno(modelben $o){
	   $id=@$o->get('funcod');
		$exec="delete from funcionarios where funcod=$id";
		if($this->o_db->exec($exec)>0)
		 echo"deletado !!!";
		else
		echo"nao deletado !!!";
	}
	public function salvarAluno(modelben $o){
	   $id=@$o->get('idFun');
	   if(empty($id)){
	   		// recebe um id gerado 
	   		$o->set('idFun', UUID::v4());
	   		
			$exec="insert into Aluno(id, nome, endereco, data_nasc, sexo)
			values('".$o->get('idFun')."', '".$o->get('funnome')."', '".$o->get('funend')."', '".$o->get('funadm')."', '".$o->get('sexo')."')";
			
			echo "$exec";
			// $exec="insert into Aluno(id)
			// values('".$o->get('idFun')."')";
		
	   }else
		{
			$exec="update funcionarios set funnome='".$o->get('funnome')."',
			funtel='".$o->get('funtel')."',
			funend='".$o->get('funend')."',
			funadm='".$o->get('funadm')."',
			funfuncao='".$o->get('funfuncao')."'
			where funcod=$id";
		}

		
		try{
			$this->o_db->exec($exec);
		}Catch(PDOException $e){
			throw $e;
		}
	}
	public function createtableAluno(){
		$exec="
		create table funcionarios(
		funcod int not null auto_increment primary key,
		funtel varchar(15),
		funend varchar(100),
		funnome varchar(100),
		funadm date,
		funfuncao varchar(15)
		)
		";
		try{
			$this->o_db->exec($exec);             
		}Catch(PDOException $e){
			throw $e;
		}
		
	}
}
?>