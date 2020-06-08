<?php

require_once'CLASSE/contato.php';
$c = new Contato;


?>



<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>4Play Time</title>
 <link href="CSS/ContatoInicial.css" rel="stylesheet">
</head>

<body>
  <div id="menu">
        <ul>
            <li><a href="ContatoInicial.php"> Contato</a></li>
        </ul>
        <p class="time"> 4Play Time</p>
        <img class="logo" src="imagens/4play_time.png" />
    </div>
    <div class="limiter">
        <div class="container-login100">

            <div class="wrap-login100">

                <!--FORMULÁRIO DE CADASTRO-->

               <form class="login100-form validate-form">
                    <div>
                    <img class="imagem1" src="imagem/unnamed.png" />
                    </div>

                    <span class="login100-form-title">


                        <div class="atividade">Alguma Dúvida? Fale Conosco !</div><br />

                        <p>
                            <label for="nome_atv">Nome:</label>
                            <input class="input" name="Nome" required="required" type="text" placeholder="" maxlength="50"/><br />
                            <label for="email">Email:</label>
                            <input class="input" name="Email" required="required" type="text" placeholder="" maxlength="50" /><br />
                            <label for="Assunto">Assunto:</label>
                            <input class="input" name="Assunto" required="required" type="text" placeholder="" maxlength="150" /><br />
                            
                        </p>
                     

                  
                        <p>
                            <label for="mensagem">Mensagem:</label>
                            <input class="input1" name="Mensagem" required="required" type="text" placeholder="" maxlength="500"/><br />
                        </p>


                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">
                                Enviar
                            </button>

                        </div>



                    </span>
                </form>
            </div>
        </div>
    </div>
<?php
  
if(isset($_POST['Email']))
{
   


    $Nome = addslashes($_POST['Nome']);
    $Email = addslashes($_POST['Email']);
    $Assunto = addslashes($_POST['Assunto']);
    $Mensagem = addslashes($_POST['Mensagem']);
   

    if(!empty($Nome) &&  !empty($Email)   && !empty($Assunto) && !empty($Mensagem))
    {
      $c->conectar("4playtime","localhost","root","");
      if($c->msgErro == "")
      {
        
        if($c->cadastrar($Nome,$Email,$Assunto,$Mensagem))
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
        <?php echo "Erro:".$c->msgErro;?>
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