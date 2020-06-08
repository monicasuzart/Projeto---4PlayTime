<?php

require_once'CLASSE/Grupo.php';
$g = new Grupo;

?>



<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>4Play Time</title>
 <link href="CSS/Criargrupo.css" rel="stylesheet">
 <style type="text/css">
body {
        background: #000 ;
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

                <li><a href="AreaPrivada.php">CONTATO</a></li>

                <li><a href="playtime.php">SAIR</a></li>
            </ul>
        </nav>
    </div>
    <div class="container-login100">

        <div class="wrap-login100">

            <!--FORMULÁRIO DE CADASTRO-->

            <form class="login100-form validate-form"method="POST">
                <div>
                    <img class="imagem1" src="imagem/blog_-_stresstesten.jpg" />
                </div>

                <span class="login100-form-title">


                    <div class="atividade">CRIAR GRUPO</div><br />

                    <p>
                        <label for="grupo">Nome do Grupo:</label>
                        <input class="input" name="Grupo" required="required" type="text" placeholder="" maxlength="50"/><br />
                        <label for="instituicao">Nome da Instituição:</label>
                        <input class="input" name="Instituicao" required="required" type="text" placeholder="" maxlength="50" /><br />
                        <label for="curso">Nome do curso:</label>
                        <input class="input" name="Curso" required="required" type="text" placeholder="" maxlength="100" /><br />

                    </p>

                    <p>
                        <label for="membros">Quantidade de membros:</label>
                        <input class="input" name="Quantmembros" required="required" type="text" placeholder="" maxlength="225" /><br />

                    </p>
                    <p>
                        <label for="mail">E-mail dos membros:</label>
                        <input class="input" name="Email" required="required" type="text" placeholder="" maxlength="225" /><br />
                    </p>
                    <p>
                        <label for="Categoria">Categoria:</label><br />
                        <input class="input" name="Categoria" required="required" type="text" placeholder="" maxlength="30" /><br />
                    </p>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Criar
                        </button>

                    </div>


                </span>
            </form>
        </div>
    </div>
    <?php

if(isset($_POST['Grupo']))
{
    $Grupo = addslashes($_POST['Grupo']);
    $Instituicao = addslashes($_POST['Instituicao']);
    $Curso = addslashes($_POST['Curso']);
    $Quantmembros = addslashes($_POST['Quantmembros']);
    $Email = addslashes($_POST['Email']);
    $Categoria = addslashes($_POST['Categoria']);
    
    

    if(!empty($Grupo) &&  !empty($Instituicao)   && !empty($Curso) && !empty($Quantmembros)  && !empty($Email) && !empty($Categoria))
    {
      $g->conectar("4playtime","localhost","root","");
      if($g->msgErro == "")
      {
        
        if($g->cadastrar($Grupo,$Instituicao,$Curso,$Quantmembros,$Email,$Categoria))
        {

          ?>
          <div id="msg-sucesso">
            Criado com Sucesso! 
          </div>
          <?php
        }

      else
      {
         ?>
          <div class="msg-erro">
        Não criado , olhar novamente os dados!
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