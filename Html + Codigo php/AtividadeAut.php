<?php

include("CLASSE/conexao.php");// caminho do seu arquivo de conexão a
$host="localhost";
$user="root";
$senha="";
$db="4playtime";
$mysqli = new mysqli($host,$user,$senha,$db);

$consulta = "SELECT a.*, e.nome FROM atividades a, estudante e where a.id_Estudante ";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>


<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>4Play Time</title>
<link href="CSS/atividade.css" rel="stylesheet">

<style type="text/css">
.p{
    font-family: Arial;
    font-size: 19px;
    line-height: 2;
    color: #000000;
    margin: 5px;
    text-align: center;
    margin-left: 63px;

    }
    .b{
    font-family: Arial;
    font-size: 15px;
    /* line-height: 2; */
    color: #000;
    margin: 5px;
    text-align: center;
    margin-left: -3px;

    }
    .atividade{
    font-family: Arial;
    font-size: 23px;
    font-weight: bold;
    color: #000000;
    text-align: center;
    margin-left: 229px;

    }
</style>
</head>

<body>


	 <?php while($dado = $con->fetch_array()) { ?>

<tr><th colspan="2"><p><b class="atividade">&nbsp;&nbsp;Atividade</b></p></th></tr>
<tr >
	<td class="p">
		<b class="p">Aluno:</b>
	</td>
	<td class="p">
		<b class="b"><?php echo $dado["nome"]; ?> </b></br>
	</td>
</tr>
<tr>
	<td class="p">
		<b class="p">ID:</b>
	</td>
	<td class="p">
		<b class="b"><?php echo $dado["id_Estudante"]; ?></b></br>
	</td>
</tr>
<tr>
	<td class="p">
		<b class="p">Titulo:</b>
	</td>
	<td class="p">
		<b class="b"><?php echo $dado["Titulo"]; ?></b></br>
	</td>
</tr>
<tr>
	<td class="p">
		<b class="p">URL:</b>
	</td>
	<td class="p">
		<b class="b"><?php echo $dado["Url"]; ?></b></br>
	</td>
</tr>
<tr>
	<td class="p">
		<b class="p">PDF:</b>
	</td>
	<td>
		<b class="b"><button class="login100-form-btn" > <?php echo $dado["Upload"]; ?></button></b></br>
	</td>
</tr>
<tr>
	<td class="p">
		<b><b class="p">Descrição:</b></b>
	</td>
	<td class="p">
		<b class="b"><?php echo $dado["Descricao"]; ?></b></br>
	</td>
</tr>
<tr>
	<td class="p">
<b class="p">Data de inicio:</b>
	</td>
	<td class="p">
<b class="b"><?php echo $dado["Datain"]; ?></b></br>
	</td>
</tr>
<tr>
	<td class="p">
<b class="p">Data de Conclusão:</b>
	</td>
	<td class="p">
<b class="b"><?php echo $dado["Datacon"]; ?></b></br>
	</td>
</tr>
<tr>
	<td class="p">
<b class="p">Duração:</b>
	</td>
	<td class="p">
<b class="b"><?php echo $dado["Duracao"]; ?></b></br>
	</td>
</tr>
<tr>
	<td class="p">
<b class="p">Categoria:</b>
	</td>
	<td class="p">
<b class="b"><?php echo $dado["Categoria"]; ?></b></br>
	</td>
</tr>
<tr>
	<td class="p">
<b class="p">Grupo:</b>
	</td>
	<td class="p">
<b class="b">CT 53 A</b></br>
	</td>
</tr>
<tr>
	<td class="p">
<b class="p"> Status:</b>
	</td>
	<td class="p">
<b class="b">Valida</b></br>
	</td>
</tr>

<?php } ?>

</body>
</html>