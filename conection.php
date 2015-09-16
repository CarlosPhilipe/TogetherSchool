<?php
abstract class conection{
	protected $o_db;
	function __construct(){
		$h="localhost";
		$b="together_school";
		$u="root";
		$s='root';
		$aux="mysql:host=$h;dbname=$b;$u;$s";
		$this->o_db=new PDO($aux,$u,$s);
		if(mysqli_connect_error())
			exit('ERROR'.
			mysqli_connect_error());
	}
}
?>