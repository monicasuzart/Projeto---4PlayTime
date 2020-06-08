<?php

include("CLASSE/conexao.php");// caminho do seu arquivo de conexão a
$host="localhost";
$user="root";
$senha="";
$db="4playtime";
$mysqli = new mysqli($host,$user,$senha,$db);
session_start();
$consulta = "SELECT e.id_Estudante,e.Nome,e.Sobrenome,e.Email,e.Celular FROM estudante e where e.id_Estudante = ". $_SESSION["id_Estudante"];
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
    margin-left: 25px;

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
    margin-left: 126px;

    }
</style>
</head>

<body>


	

 <?php while($dado = $con->fetch_array()) { ?>
<tr><th colspan="2" ><p><b class="atividade">&nbsp;&nbsp;Dados do Estudante</b></p></th></tr>
<tr >
	<td class="p">
		<b class="p">Aluno:</b>
	</td>
	<td class="p">
		<b class="b"><?php echo $dado["Nome"]; ?> <?php echo $dado["Sobrenome"]; ?> </b></br>

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
		<b class="p">Email:</b>
	</td>
	<td class="p">
		<b class="b"><?php echo $dado["Email"]; ?></b></br>
	</td>
</tr>
<tr>
	<td class="p">
		<b class="p">Celular:</b>
	</td>
	<td class="p">
		<b class="b"><?php echo $dado["Celular"]; ?></b></br>
	</td>
</tr>


<?php } ?>


</body>
</html>