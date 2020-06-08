<?php

require_once'CLASSE/Atividade.php';
$at = new Atividade;
include("CLASSE/conexao.php");
$host="localhost";
$user="root";
$senha="";
$db="4playtime";
$mysqli = new mysqli($host,$user,$senha,$db);
session_start();
$consulta = "SELECT e.id_Estudante FROM estudante e where e.id_Estudante = ". $_SESSION["id_Estudante"];

$con = $mysqli->query($consulta) or die($mysqli->error);

?>




<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>4Play Time</title>
 <link href="CSS/insAtividade.css" rel="stylesheet">

</head>

<body>
    <div class="menu-wrap">
        <nav class="menu">
            <ul class="clearfix">
                <li><a href="Relatorio.php">RELATÓRIO</a></li>
                <li>
                    <a href="insAtividade.php">INSERIR ATIVIDADE</a>
                </li>
                <li><a href="GruposEstud.php">GRUPOS</a></li>

                <li><a href="ContatoEst.php">CONTATO</a></li>

                <li><a href="playtime.php">SAIR</a></li>
            </ul>
        </nav>
    </div>

    <div class="container-login100">

        <div class="wrap-login100">

                <!--FORMULÁRIO DE CADASTRO-->

                <form class="login100-form validate-form" method="POST">
                    <div>
                    <img class="imagem1" src="imagem/blog_-_stresstesten.jpg" />
                    </div>

                    <span class="login100-form-title">


                        <div class="atividade">Inserir Atividade Complementar</div><br />
                       
                        <p>
                            <label for="Titulo">Titulo:</label>
                            <input class="input" name="Titulo" required="required" type="text" placeholder="" maxlength="150"/><br />
                        
                        </p>
                        <p>
                            <label for="Url">URL(Opcional):</label>
                            <input class="input" name="Url" required="required" type="text" placeholder="" maxlength="150" /><br />
                        </p>
                        <p>
                            <label for="Upload">Upload PDF (opcional):</label>
                            <input class="input" name="Upload" required="required" type="text" placeholder="" maxlength="100" />
                            <button class="login100-form-btn">
                                Upload
                            </button><br />
                        </p>

                        <p>
                            <label for="datain">Data de Inicio:</label>
                            <input class="input" name="Datain" required="required" type="text" placeholder="" maxlength="10" /><br />

                        </p>
                        <p>
                            <label for="datacon">Data de Conclusão:</label>
                            <input class="input" name="Datacon" required="required" type="text" placeholder="" maxlength="10"/><br />

                        </p>
                        <p>
                            <label for="Duracao">Duração:</label>
                            <input class="input" name="Duracao" required="required" type="text" placeholder="" maxlength="15"/><br />

                        </p>
                        <p>
                            <label for="Categoria">Categoria:</label>
                            <input class="input" name="Categoria" required="required" type="text" placeholder="" maxlength="30"/><br />
                        </p>
                        <p>
                            <label for="Descricao">Descrição(opcional):</label>
                            <input class="input1" name="Descricao" required="required" type="text" placeholder="" maxlength="200" /><br />
                        </p>


                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">
                                Submeter
                            </button>

                        </div>



                    </span>
                </form>
            </div>
        </div>
    </div>
  <?php
  
if(isset($_POST['Titulo']))
{
    echo($_SESSION["id_Estudante"]);
    echo($_SESSION["id_Autenticador"]);


    $Titulo = addslashes($_POST['Titulo']);
    $Url = addslashes($_POST['Url']);
    $Upload = addslashes($_POST['Upload']);
    $Datain = addslashes($_POST['Datain']);
    $Datacon = addslashes($_POST['Datacon']);
    $Duracao = addslashes($_POST['Duracao']);
    $Categoria = addslashes($_POST['Categoria']);
    $Descricao = addslashes($_POST['Descricao']);



  

    
    

    if(!empty($Titulo) &&  !empty($Url)   && !empty($Upload) && !empty($Datain) && !empty($Datacon)&& !empty($Duracao)  && !empty($Categoria)  && !empty($Descricao))
    {
      $at->conectar("4playtime","localhost","root","");
      if($at->msgErro == "")
      {
        
        if($at->cadastrar($Titulo,$Url,$Upload,$Datain,$Datacon,$Duracao,$Categoria,$Descricao, $_SESSION["id_Estudante"], $_SESSION["id_Autenticador"]))
        {

          ?>
          <div id="msg-sucesso">
            Inserido com Sucesso! 
          </div>
          <?php
        }

      else
      {
         ?>
          <div class="msg-erro">
        Não Inserido , olhar novamente os dados!
        </div>
        <?php
      }
    }

      else
      {
        ?>
         <div class="msg-erro">
        <?php echo "Erro:".$at->msgErro;?>
      </div>
      <?php
      }
    }else
    {
    ?>
    <div class="msg-erro">
        Preencha todos os campos!
      </div>
        <?php
    }

}



?>
</body>
            </html>