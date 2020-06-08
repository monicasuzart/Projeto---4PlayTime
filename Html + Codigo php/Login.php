<?php
require_once'CLASSE/Autenticador.php';
$a = new Autenticador;


?>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Area do Autentificador</title>
 <link href="CSS/loginAut.css" rel="stylesheet">
</head>

<body>
     
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
            

                <form class="login100-form validate-form" method="POST">
                    <span class="login100-form-title">
                        <img src="imagem/4play_time.png" width="209" />
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input id="txtEmail" class="input100" name="Email" type="text" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="txtSenha" class="input100" name="Senha" type="password" placeholder="Senha">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <span class="img1">
                        <img class="img1" src="imagem/fb_icon_325x325.png" />

                    </span>

                    <span class="img2">

                        <img class="img2" src="imagem/imagen-google-search-lite-0thumb.png" />


                    </span>

                   
                        <div class="container-login100-form-btn"></div>
                            <button class="login100-form-btn" type="submit">
                                Entrar
                             </button>
                        

                    <div class="text-center p-t-12">
                        <span class="txt1">

                        </span>
                        <a class="txt2" href="AreaPrivada.php" >
                            Esqueceu sua Senha?
                        </a>
                    </div>

                   
                           
                </div>
                </form>

            </div>
           
        </div>
    </div>
<?php

if(isset($_POST['Email']))
{
   
   
    $Email = addslashes($_POST['Email']);
    $Senha = addslashes($_POST['Senha']);
   

    if(!empty($Email) && !empty($Senha))
    {
     $a->conectar("4playtime","localhost","root","");
     if($a->msgErro == "")
     {
     if($a->logar($Email,$Senha))
     {
       header("Location: Gerenciadordegrupos.php");
     }   
     else
     {
        echo"Email e/ou senha estão incorretos";
     }
    }else{
        echo "Erro:".$a->msgErro;
    }
    }else
    {
        echo"Prencha todos os campos";
    }

}

?>
</body>
</html>