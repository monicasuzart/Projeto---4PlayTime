<?php


/**
* 
*/
class Grupo
{ 
	private $pdo;
	public $msgErro="";
	
	public function conectar($Nome,$host,$Usuario,$Senha)
	{

		global $pdo;
	try{
		$pdo = new PDO("mysql:dbname=".$Nome.";host=".$host,$Usuario,$Senha);
	}catch (PDOException $e){
		$msgErro = $e->getMessage();
	}
}
public function cadastrar($Grupo,$Instituicao,$Curso,$Quantmembros,$Email,$Categoria)
{
global $pdo;

$sql=$pdo->prepare("SELECT id_Grupo FROM grupo WHERE Grupo = :g");
$sql->bindValue(":g",$Grupo);
$sql->execute();

if($sql->rowCount()>0)
{
	return false;
}
else
{
	$sql = $pdo->prepare("INSERT INTO grupo
		(Grupo,Instituicao,Curso,Quantmembros,Email,Categoria) VALUES(:g,:i,:c,:q,:e,:c)");
	$sql->bindValue(":g",$Grupo);
	$sql->bindValue(":i",$Instituicao);
	$sql->bindValue(":c",$Curso);
	$sql->bindValue(":q",$Quantmembros);
	$sql->bindValue(":e",$Email);
	$sql->bindValue(":c",$Categoria);
	$sql->execute();
	return true;
}
}
}

?>