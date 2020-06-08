<?php


class Atividade
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
public function cadastrar($Titulo,$Url,$Upload,$Datain,$Datacon,$Duracao,$Categoria,$Descricao,$id_Estudante,$id_Autenticador)
{
global $pdo;

$sql=$pdo->prepare("SELECT id_Atividade FROM atividades WHERE Titulo = :t");
$sql->bindValue(":t",$Titulo);
$sql->execute();

if($sql->rowCount()>0)
{
	return false;
}
else
{
	$sql = $pdo->prepare("INSERT INTO atividades
		(Titulo,Url,Upload,Datain,Datacon,Duracao,Categoria,Descricao,id_Estudante,id_Autenticador) VALUES(:t,:u,:up,:di,:dc,:d,:c,:de,:id,:idA)");
	$sql->bindValue(":t",$Titulo);
	$sql->bindValue(":u",$Url);
	$sql->bindValue(":up",$Upload);
	$sql->bindValue(":di",$Datain);
	$sql->bindValue(":dc",$Datacon);
	$sql->bindValue(":d",$Duracao);
	$sql->bindValue(":c",$Categoria);
	$sql->bindValue(":de",$Descricao);
	$sql->bindValue(":id",$id_Estudante);
	$sql->bindValue(":idA",$id_Autenticador);

	$sql->execute();
	return true;

}
}
}

?>