<?php


/**
* 
*/
class Estudante
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
public function cadastrar($Nome,$Sobrenome,$CPF,$Email,$Senha,$Celular,$Grupo)
{
global $pdo;

$sql=$pdo->prepare("SELECT id_Estudante FROM estudante WHERE Email = :e");
$sql->bindValue(":e",$Email);
$sql->execute();

if($sql->rowCount()>0)
{
	return false;
}
else
{
	$sql = $pdo->prepare("INSERT INTO estudante
		(Nome,Sobrenome,CPF,Email,Senha,Celular,Grupo) VALUES(:n,:so,:cp,:e,:s,:c,:g)");
	$sql->bindValue(":n",$Nome);
	$sql->bindValue(":so",$Sobrenome);
	$sql->bindValue(":cp",$CPF);
	$sql->bindValue(":e",$Email);
	$sql->bindValue(":s",$Senha);
	$sql->bindValue(":c",$Celular);
	$sql->bindValue(":g",$Grupo);
	$sql->execute();
	return true;
}
}
public function logar($Email,$Senha)
{
global $pdo;
$sql=$pdo->prepare("SELECT id_Estudante FROM estudante WHERE Email = :e AND Senha = :s");
$sql->bindValue(":e",$Email);
$sql->bindValue(":s",$Senha);
	$sql->execute();
	if($sql->rowCount()>0)
	{
		$dado = $sql->fetch();
		session_start();
		$_SESSION['id_Estudante'] = $dado['id_Estudante'];
		return true;
	}
	else
	{
		return false;
	}
}
}

?>