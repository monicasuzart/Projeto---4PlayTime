
<?php

include("CLASSE/conexao.php");// caminho do seu arquivo de conexão a
$host="localhost";
$user="root";
$senha="";
$db="4playtime";
$mysqli = new mysqli($host,$user,$senha,$db);
session_start();
$consulta = "SELECT * FROM atividades";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>


<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>4Play Time</title>
 <link href="CSS/ValidadorAtv.css" rel="stylesheet">
 <style type="text/css">
 .texto1 {
                  font-family: Arial;
    font-size: 17px;
    font-weight: bold;
    color: #000000;
    margin-left: -18px;
    margin-top: -208px;
    }
.cor{
            background-color: #B5B5B5;
    color: #000;
    font-size: 15px;
    width: 134px;
    height: 29px;
    margin-left: -37px;
            }
            .letra{
           color: #000;
           background-color: #CFCFCF;
    font-size: 15px;
    /* width: 128px; */
    margin-left: -37px;
    margin-top: 29px;
    text-align: center;
    text-decoration: none;
            }
             .letrat{
           color: #000;
           background-color: #CFCFCF;
    font-size: 15px;
    /* width: 128px; */
    margin-left: -37px;
    margin-top: 29px;
    text-align: left;
    text-decoration: none;
            }
 </style>



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
                <div class="relatorio"></br>VALIDAR ATIVIDADE</div><br />
                <img class="imagem1" src="Imagem/blog_-_stresstesten.jpg" />
                <div class="atividade"></div><br />




                <div>
                    <table class="texto1">

                     <tr class="cor">
                            <th class="cor">CONCLUSÕES&nbsp;&nbsp;&nbsp;</th>
                            <th class="cor">DURAÇÃO</th>
                            <th class="cor">&nbsp;&nbsp;CONCLUIU EM</th>
                            <th class="cor">&nbsp;&nbsp;&nbsp;STATUS</th>
                        </tr>
                        
                       <?php while($dado = $con->fetch_array()){?>
                     
                        <tr>
                            <td class="letrat"><input type="radio" name ="status" ><?php echo $dado["Titulo"]; ?></input></td>
                            <td class="letra"><?php echo $dado["Duracao"]; ?></td>
                            <td class="letra">&nbsp;&nbsp;<?php echo $dado["Datacon"]; ?></td>
                            <td class="letra">&nbsp;&nbsp;<?php echo $dado["status"]; ?></td>
                        </tr>
                        <?php }?>
                    </table>
                </div>

      <form method="POST" action="ValidadorAtv.php">
                <div class="container-login100-form-btn">
                  <?php

$status = $_POST['status'];
$host="localhost";
$user="root";
$senha="";
$db="4playtime";
$con = mysqli_connect($host,$user,$senha,$db);
$situacao = "UPDATE atividades SET status = 'Invalida'";
$resulsituacao = mysqli_query($con, $situacao);
?>
    //restante do código

<button class="login100-form-btn" type="submit"  name="status" value="Valida">
VALÍDA
                        </button>
                 
                </div>

 
            </form>
                <div class="container-login100-form-btn">

                         <?php
if (isset($_POST['status'])){
    $classificacao = $_POST['status'];

if(isset($classificacao)){

    $consulta = "UPDATE atividades SET status = 'Invalida' WHERE id_Atividade = 2";
    $con = $mysqli->query($consulta) or die($mysqli->error);
    if (!$consulta) {
        echo "Erro ao inserir na tabela.";
    }
}
}
    //restante do código
?>
                    <button class="login100-form-btn" type="submit" name="status" value="invalida">
                        ÍNVALIDA
                    </button>
                </div>
            </div>

            <aside>
                <iframe class="ativ" frameborder="0" src="Atividade2.php" height="600" width="540" name="post"></iframe>
            </aside>

        </div>

    </div>

</body>
            </html>