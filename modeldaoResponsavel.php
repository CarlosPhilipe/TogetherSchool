<?php
	require_once('controllerResponsavel.php');
	require_once('conection.php');
class modeldaoResponsavel extends conection{
	function __construct(){
		parent::__construct();
		$this->createtableResponsavel();
		
	}
	
	public function calcResponsavel(modelben $o){
		return $o->get('funcod');
	}
	public function especificoResponsavel(modelben $o){
		$query="select * from 
		funcionarios where funcod=".$o->get('funcod'); 
		
		$data=$this->o_db->query($query);
		$listaResponsavel=array();
		while($r=$data->fetchObject()){
			$c=new controllerResponsavel();
			$c->set('funcod',$r->funcod);
			$c->set('funtel',$r->funtel);
			$c->set('funend',$r->funend);
			$c->set('funnome',$r->funnome);
			$c->set('funadm',$r->funadm);
			$c->set('funfuncao',$r->funfuncao);
			// $c->set('qtd',$r->qtd);
			//$c->set('total',($r->qtd*11));
			array_push($listaResponsavel,$c);
		}
		return $listaResponsavel;
	}
	public function listaResponsavel(modelben $o){
		$query="select * from funcionarios";
		$data=$this->o_db->query($query);
		$listaResponsavel=array();
		while($r=$data->fetchObject()){
			$c=new controllerResponsavel();
			$c->set('funcod',$r->funcod);
			$c->set('funtel',$r->funtel);
			$c->set('funend',$r->funend);
			$c->set('funnome',$r->funnome);
			$c->set('funadm',$r->funadm);
			$c->set('funfuncao',$r->funfuncao);
			// $c->set('qtd',$r->qtd);
			// $c->set('total',($r->qtd*11));
			array_push($listaResponsavel,$c);
		}
		return $listaResponsavel;
	}
	public function delResponsavel(modelben $o){
	   $id=@$o->get('funcod');
		$exec="delete from funcionarios where funcod=$id";
		if($this->o_db->exec($exec)>0)
		 echo"deletado !!!";
		else
		echo"nao deletado !!!";
	}
	public function salvarResponsavel(modelben $o){
	   $id=@$o->get('funcod');
	   if(empty($id))
		$exec="insert into funcionarios(funtel,funend,funnome,funadm,funfuncao)
		values('".$o->get('funtel')."','".$o->get('funend')."','".$o->get('funnome')."','".$o->get('funadm')."','".$o->get('funfuncao')."')";
		
	   else
		$exec="update funcionarios set funnome='".$o->get('funnome')."',
		funtel='".$o->get('funtel')."',
		funend='".$o->get('funend')."',
		funadm='".$o->get('funadm')."',
		funfuncao='".$o->get('funfuncao')."'
		where funcod=$id";


		
		try{
			$this->o_db->exec($exec);
		}Catch(PDOException $e){
			throw $e;
		}
	}
	public function createtableResponsavel(){
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