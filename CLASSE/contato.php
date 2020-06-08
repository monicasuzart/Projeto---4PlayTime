<?php


class Contato
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
public function cadastrar($Nome,$Email,$Assunto,$Mensagem)
{
global $pdo;

$sql=$pdo->prepare("SELECT id_Contato FROM contato WHERE Email = :e");
$sql->bindValue(":e",$Email);
$sql->execute();

if($sql->rowCount()>0)
{
	return false;
}
else
{
	$sql = $pdo->prepare("INSERT INTO contato(Nome,Email,Assunto,Mensagem) VALUES(:n,:e,:a,:m)");
	$sql->bindValue(":n",$Nome);
	$sql->bindValue(":e",$Email);
	$sql->bindValue(":a",$Assunto);
	$sql->bindValue(":m",$Mensagem);
	
	$sql->execute();
	return true;

}
}
}

?>