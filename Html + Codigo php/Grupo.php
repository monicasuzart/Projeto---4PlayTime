<?php

include("CLASSE/conexao.php"); // caminho do seu arquivo de conexão a
$host="localhost";
$user="root";
$senha="";
$db="4playtime";
$mysqli = new mysqli($host,$user,$senha,$db);
$consulta = "SELECT * FROM grupo";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>


<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>4Play Time</title>
 <link href="CSS/grupo.css" rel="stylesheet">
 <style type="text/css">
.p{
    font-family: Arial;
        font-size: 18px;
        line-height: 1;
        color: #000000;
        margin: 0px;
        margin-left:27px;
        margin-top: -4px;
    }
    .grupo{
    	font-size: 20px;
    margin-left: 152px;
    }
 </style>
</head>

<body>
<div class="p">

	 <?php while($dado = $con->fetch_array()) { ?>

	<p><b class="grupo">Grupo <?php echo $dado["Grupo"]; ?></b></p></br>
<p><b>Instituição:</b> <?php echo $dado["Instituicao"]; ?></p>
<p><b>Nome do Curso:</b><?php echo $dado["Curso"]; ?></p>
<p><b>Categoria:</b><?php echo $dado["Categoria"]; ?></p>
<p><b>Membros:</b>
<p><a href="DadoEstudante.php">ID: <?php echo $dado["id_Estudante"]; ?></a></p>
<p><a href="DadoEstudante.php">ID: 2</a></p>
<p><a href="DadoEstudante.php">ID: 3</a></p>
<p><a href="DadoEstudante.php">ID: 4</a></p>
<p><a href="DadoEstudante.php">ID: 5</a></p>


<p><b>Descrição:</p></>
<p>Este grupo tem o intuíto de reunir por categoria as atividades da turma de ADS.</p>
<p><b>Atividades:</b></p>
<p><a href="Atividade.php">Atividade - ID: <?php echo $dado["id_Atividade"]; ?></a></p>
<p><a href="Atividade.php">Atividade - ID: 2</a></p>
<p><a href="Atividade.php">Atividade - ID: 3</a></p>
<p><a href="Atividade.php">Atividade - ID: 4</a></p>
<p><a href="Atividade.php">Atividade - ID: 5</a></p></br>
<?php } ?>

</div>
</body>

                        </html>