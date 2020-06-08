<?php

include("CLASSE/conexao.php"); // caminho do seu arquivo de conexão a
$host="localhost";
$user="root";
$senha="";
$db="4playtime";
$mysqli = new mysqli($host,$user,$senha,$db);
$consulta = "SELECT * FROM grupo ";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>


<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>4Play Time</title>
 <link href="CSS/gerenciador.css" rel="stylesheet">
</head>

<body>
	<div class="menu-wrap">
        <nav class="menu">
            <ul class="clearfix">
                <li>
                    <a href="Gerenciadordegrupos.php">GRUPOS</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="Criargrupo.php">CRIAR GRUPO</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="ValidadorAtv.php">VALIDAR</a>
                </li>

                <li><a href="ContatoGeren.php">CONTATO</a></li>

                <li><a href="playtime.php">SAIR</a></li>
            </ul>
        </nav>
    </div>

    <div class="container-login100">

        <div class="wrap-login100">

            <div>
                <div class="relatorio">GRUPOS</div><br />
                <img class="imagem1" src="Imagem/d737a872708b488d89d0341ac9b8bc5a-pessoas-contato---cone-pessoas-by-vexels.png" />


                  <div class="atividade"></div><br />

                <div>
                    <table class="texto1">

         <?php while($dado = $con->fetch_array()) { ?>
                        <tr>
                            <td class="container-login100-form-btn">
                                <button class="login100-form-btn">
                                    <a class="grupo" href="Grupo.php" target="post" color="#fff"> <?php echo $dado["Grupo"]; ?></a>
                                </button>
                            </td>
                        </tr>
                       
<?php } ?>
                    </table>
                </div>

            </div>

            <aside>
                <iframe class="grupos" frameborder="0" src="Grupo.php" height="600" width="540" name="post"></iframe>
            </aside>
        </div>
    </div>



</body>
</html>