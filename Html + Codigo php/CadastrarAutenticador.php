<?php

require_once'CLASSE/Autenticador.php';
$a = new Autenticador;

?>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>4Play Time</title>
 <link href="CSS/cadEst.css" rel="stylesheet">
</head>

<body>
    
 <div id="menu">
        <ul>
            <li><a href="ContatoInicial.php"> Contato</a></li>
        </ul>
        <p class="time"> 4Play Time</p>
        <img class="logo" src="imagem/4play_time.png" />
    </div>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <!--FORMULÁRIO DE CADASTRO-->

                <form class="login100-form validate-form" method="POST">


                    <span class="login100-form-title">
                        <div class="cadastro">AUTENTICADOR</br></div>
                        
                       
                        <p>
                            <label for="nome_cad">Nome:</label>
                            <input class="input" name="Nome"  type="text" placeholder="Nome" maxlength="50" />
                        </p>
                        <p>
                            <label for="sobrenome_cad">Sobrenome:</label>
                            <input class="input" name="Sobrenome"  type="text" placeholder="Sobrenome" maxlength="50" />
                        </p>
                        <p>
                            <label for="cnpj">CNPJ:</label>
                            <input class="input" name="CNPJ"  type="" placeholder="XX. XXX. XXX/XXXX-XX" maxlength="18"/>
                        </p>
                       
                        <p>
                            <label for="Email_cad">E-mail:</label>
                            <input class="input" name="Email" type="text" placeholder="Email"maxlength="50" />
                        </p>

                        <p>
                            <label for="senha_cad">Senha:</label>
                            <input class="input" name="Senha"  type="password" placeholder="Senha"maxlength="8" />
                        </p>
                        <p>
                            <label for="senha_cad">Repetir Senha:</label>
                            <input class="input" name="confSenha" type="password" placeholder="Repetir Senha:" maxlength="8"/>
                        </p>
                         <p>
                            <label for="celular_cad">Celular:</label>
                            <input class="input" name="Celular" type="text" placeholder="Celular"maxlength="15" />
                        </p>

                        <p>
                        <label for="interesses_cad">Interesses:</label><br />
                            <input type="radio" name="tecnologia" value="tecnologia" /> Tecnologia
                            <input type="radio" name="exatas" value="exatas" /> Exatas<br />
                            <input type="radio" name="fotografia" value="fotografia" /> Fotografia
                            <input type="radio" name="politica" value="politica" /> Politica <br />
                            <input type="radio" name="literatura" value="literatura" /> Literatura
                            <input type="radio" name="esportes" value="esportes" /> Esportes <br />
                            <input type="radio" name="historia" value="historia" /> História
                            <input type="radio" name="voluntariado" value="voluntariado" /> Voluntáriado
                       </p>


                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                <a href="playtime.php" target="_self">CANCELAR</a>
                            </button>
                            <button class="login100-form-btn" type="submit">
                               CADASTRAR
                            </button>
                        </div>



                    </span>
                </form>
            </div>
        </div>
    </div>
<?php

if(isset($_POST['Nome']))
{
    $Nome = addslashes($_POST['Nome']);
    $Sobrenome = addslashes($_POST['Sobrenome']);
    $CNPJ = addslashes($_POST['CNPJ']);
    $Email = addslashes($_POST['Email']);
    $Senha = addslashes($_POST['Senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);
    $Celular = addslashes($_POST['Celular']);
    

    if(!empty($Nome) && !empty($Sobrenome) && !empty($CNPJ)   && !empty($Email) && !empty($Senha)  && !empty($confirmarSenha) && !empty($Celular))
    {
      $a->conectar("4playtime","localhost","root","");
      if($a->msgErro == "")
      {
        if($Senha == $confirmarSenha)
        {
        
        if($a->cadastrar($Nome,$Sobrenome,$CNPJ,$Email,$Senha,$Celular))
        {

          ?>
          <div id="msg-sucesso">
            Cadastrado com Sucesso! Acesse para entrar!
          </div>
          <?php
        }

        else
        {
          ?>
          <div class="msg-erro">
          Email já cadastrado!
        </div>
        <?php
        }
      }
      else
      {
         ?>
          <div class="msg-erro">
        Senha e confirmar senha não corresponde!
        </div>
        <?php
      }
    }

      else
      {
        ?>
         <div class="msg-erro">
        <?php echo "Erro:".$u->msgErro;?>
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
