<?php


/**
* 
*/
class Autenticador
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
public function cadastrar($Nome,$Sobrenome,$CNPJ,$Email,$Senha,$Celular)
{
global $pdo;

$sql=$pdo->prepare("SELECT id_Autenticador FROM autenticador WHERE Email = :e");
$sql->bindValue(":e",$Email);
$sql->execute();

if($sql->rowCount()>0)
{
	return false;
}
else
{
	$sql = $pdo->prepare("INSERT INTO autenticador
		(Nome,Sobrenome,CNPJ,Email,Senha,Celular) VALUES(:n,:so,:cp,:e,:s,:c)");
	$sql->bindValue(":n",$Nome);
	$sql->bindValue(":so",$Sobrenome);
	$sql->bindValue(":cp",$CNPJ);
	$sql->bindValue(":e",$Email);
	$sql->bindValue(":s",$Senha);
	$sql->bindValue(":c",$Celular);
	$sql->execute();
	return true;
}
}
public function logar($Email,$Senha)
{
global $pdo;
$sql=$pdo->prepare("SELECT id_Autenticador FROM autenticador WHERE Email = :e AND Senha = :s");
$sql->bindValue(":e",$Email);
$sql->bindValue(":s",$Senha);
	$sql->execute();
	if($sql->rowCount()>0)
	{
		$dado = $sql->fetch();
		session_start();
		$_SESSION['id_Autenticador'] = $dado['id_Autenticador'];
		return true;
	}
	else
	{
		return false;
	}
}
}

?>