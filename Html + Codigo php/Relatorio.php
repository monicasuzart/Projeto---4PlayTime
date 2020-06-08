<?php
include("CLASSE/conexao.php");
$host="localhost";
$user="root";
$senha="";
$db="4playtime";
$mysqli = new mysqli($host,$user,$senha,$db);
session_start();
$consulta = "SELECT a.*, e.Nome FROM atividades a, estudante e where a.id_Estudante = e.id_Estudante AND a.id_Estudante = ". $_SESSION["id_Estudante"]; 
$con = $mysqli->query($consulta) or die($mysqli->error);


?>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>4Play Time</title>

 <style type="text/css">

  * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body, html {
        height: 100%;
        font-family: Poppins-Regular, sans-serif;
    }


    div .logo {
        width: 46px;
        margin-top: -35px;
        margin-left: 20px;
    }

    .time {
        font-family: Arial;
        font-size: 15px;
        font-weight: bold;
        color: #c850c0;
        margin-left: 47%;
        margin-top: -47px;
    }

   body {
    background:#000000 url('body-bg.jpg');
}

.clearfix:after {
    display:block;
    clear:both;
}

/*----- Menu Outline -----*/
    

    .menu {
        width: 1000px;
        margin: 10px auto;
        margin-left: 389px;
        list-style: none;
    }

.menu li {
    margin:0px;
    list-style:none;
    font-family:Arial;
}

        .menu a {
            transition: all linear 0.15s;
            color: #fff;
            list-style: none;
            text-decoration: none;
            font-size: 13px;
            font-family: Arial;
            font-weight: bold;
        }

        .menu li:hover > a, .menu .current-item > a {
            text-decoration: none;
            list-style: none;
            color: #bc03f1;
            font-size:14px;
        }

        .menu .arrow {
            font-size: 14px;
            line-height: 0%;
            list-style: none;
        }

/*----- Top Level -----*/
        .menu > ul > li {
            float: left;
            display: inline-block;
            position: relative;
            font-size: 13px;
            list-style: none;
        }

    .menu > ul > li > a {
        padding: 16px 40px;
        display: inline-block;
        text-shadow: 0px 1px 0px rgba(0,0,0,0.4);
        list-style: none;
    }

.menu > ul > li:hover > a, .menu > ul > .current-item > a {
    background:#2e2728;
}

/*----- Bottom Level -----*/
.menu li:hover .sub-menu {
    z-index:1;
    opacity:1;
}

.sub-menu {
    width:160%;
    padding:5px 0px;
    position:absolute;
    top:100%;
    left:0px;
    z-index:-1;
    opacity:0;
    transition:opacity linear 0.15s;
    box-shadow:0px 2px 3px rgba(0,0,0,0.2);
    background:#2e2728;
}

.sub-menu li {
    display:block;
    font-size:16px;
}

.sub-menu li a {
    padding:10px 30px;
    display:block;
}

.sub-menu li a:hover, .sub-menu .current-item a {
    background:#3e3436;
}
    /*---------------------------------------------*/
    

    /*---------------------------------------------*/
    h1, h2, h3, h4, h5, h6 {
        margin: 0px;
    }

    p {
        font-family: Arial;
        font-size: 20px;
        line-height: 2;
        color: #000000;
        margin: 0px;
    }

    ul, li {
        margin: 0px;
        list-style-type: none;
    }

    nav{
    width: 48%;
    height: 48px;
align-items: center;
    text-align: center;
}

aside{
    width: 48%;
    height: 600px;
    float: left;

}


    .container-login100 {
        width: 100%;
        min-height: 100vh;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
        background: #9053c7;
        background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
        background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
        background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
        background: linear-gradient(-135deg, #c850c0, #4158d0);
    }

  .wrap-login100 {
        width: 1247px;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 30px 10px 15px 20px;
    }
    .imagem1 {
        width: 303px;
        margin-top: -103px;
        margin-left: 841px;
    }
     .atividade {
        font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
        font-size: 25px;
        font-weight: bold;
        color: #000;
        text-align: center;
        margin-top: -79px;
        margin-left: 1px;
        background-color: #bebebe;
        width: 580px;
        border-radius: 60px;
        height: 600px;
    }
    .caixa {
        width: 110%;
        border-radius: 3pc;
        height: 87%;
        background-color: #716e6e;
      
    }

     .texto1 {
        font-family: Arial;
    font-size: 15px;
    font-weight: bold;
    color: #000000;
    margin-left: 1px;
    margin-top: -310px;
    }
     .relatorio {
        margin-left: 214px;
        font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
        font-size: 25px;
        font-weight: bold;
        color: #000;
    }
    .horas {
        font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
        font-size: 14px;
        font-weight: bold;
        color: #000000;
        margin-top: -251px;
    }

   
    
    .input {
        font-family: Arial;
        font-size: 15px;
        line-height: 1.5;
        color: #000000;
        display: block;
        width: 43%;
        margin-top: 3px;
        background: #ffffff;
        height: 32px;
        border-radius: 25px;
        padding: 0 30px 0 10px;
    }
    .input1 {
        font-family: Arial;
        font-size: 15px;
        line-height: 1.5;
        color: #000000;
        display: block;
        width: 45%;
        margin-top: 3px;
        background: #ffffff;
        height: 155px;
        border-radius: 25px;
        padding: 0 30px 0 10px;
    }

    .data1 {
        font-family: Arial;
        font-size: 15px;
        line-height: 1.5;
        color: #000000;
        display: block;
        width: 112%;
        margin-top: 3px;
        margin-left: 20px;
        background: #ffffff;
        height: 32px;
        border-radius: 25px;
        padding: 0 30px 0 10px;
    }
    .data2 {
        font-family: Arial;
        font-size: 15px;
        line-height: 1.5;
        color: #000000;
        display: block;
        width: 112%;
        margin-top: 3px;
        margin-left:20px;
        background: #ffffff;
        height: 32px;
        border-radius: 25px;
        padding: 0 30px 0 10px;
    }

    .login100-form-btn {
        font-family: Arial;
        font-size: 13px;
        font-weight:bold;
        line-height: 2.5;
        color: #fff;
        margin-top: -34px;
        margin-left: 45%;
        text-transform: uppercase;
        width: 15%;
        height: 33px;
        border-radius: 25px;
        background: #4C0B5F;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 25px;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

        .login100-form-btn:hover {
            background: #4C0B5F;
        }

    /*------------------------------------------------------------------
    [ Responsive ]*/



    @media (max-width: 992px) {
        .wrap-login100 {
            padding: 177px 90px 33px 85px;
        }

        .login100-pic {
            width: 35%;
        }

        .login100-form {
            width: 50%;
        }
    }

    @media (max-width: 768px) {
        .wrap-login100 {
            padding: 100px 80px 33px 80px;
        }

        .login100-pic {
            display: none;
        }

        .login100-form {
            width: 50%;
        }

        .img3 {
            width: 961px;
            margin-left: 0px;
            margin-top: -23px;
            display: none;
        }
    }

    @media (max-width: 576px) {
        .wrap-login100 {
            padding: 152px 15px 33px 15px;
        }

        .img3 {
            width: 961px;
            margin-left: 0px;
            margin-top: -23px;
            display: none;
        }

        .login100-form-btn {
            margin-left: 40%;
        }
        .input{
            width:142%;
        }
        .input1 {
            width: 146%;
        }

        .atividade {
            margin-left: 1%;
            font-size: 18px;
            margin-top:-139px;
        }
        .login100-form-btn {
            margin-top: -34px;
            margin-left: 144%;
            width: 61%;
            height: 33px;
        }
        .imagem1{
            display:none;
        }
    }
        table, td, th, tfoot {text-align: center; }
th {background-color:;}
caption {font-size:x-large;}
colgroup {background:#DCDCDC;}
.texto1 {
                  font-family: Arial;
    font-size: 17px;
    font-weight: bold;
    color: #000000;
    margin-left: 2px;
    margin-top: -310px;
    }
     .relatorio {
        margin-left: 214px;
        font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
        font-size: 25px;
        font-weight: bold;
        color: #000;
    }
    .horas {
        font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
        font-size: 14px;
        font-weight: bold;
        color: #000000;
        margin-top: -251px;
    }

      .percent {
        position: absolute;
        width: 163px;
        height: 165px;
        left: -568px;
        right: 0;
        top: 336px;
        margin: auto;
        border-radius: 50%;
    }
    .quanthrs {
        margin-left: 110px;
        margin-top: 7px;
        font-family: Arial;
        font-size: 25px;
        font-weight: bold;
        color:#000;
        position: absolute;
    }
    .progress-bar {
        --progress:20;
        height: 46px;
        width: 355px;
        background-color: #000000;
        margin-left: -121px;
        margin-top: -49px;
        padding: 4px;
        background-color: #fff;
        display: flex;
        border-radius: 25px;
    }

        .progress-bar::before {
            content: "";
            width: calc(var(--progress) * 1%);
            background-color: hsl( calc(var(--progress) * 1.2), 80%, 50%);
            transition: all 0.2s ease;
            border-radius: 25px;
        }

    .cor{
            background-color: #9C9C9C;
    color: #000;
    font-size: 15px;
    width: 134px;
    height: 29px;
    margin-left: -37px;
            }
            .letra{
           color: #000;
           background-color: #B5B5B5;
    font-size: 15px;
    /* width: 128px; */
    margin-left: -37px;
    margin-top: 29px;
    text-align: center;
    text-decoration: none;
            }

 </style>
 
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

            <div>
                <div class="relatorio"></br>RELATÓRIO</div><br />
                <div class="atividade"></div><br />
                
                <script>


function Progress(event) {
  if (event.lengthComputable) {
    progressbar.max = event.total;
    progressbar.value = event.loaded;
    <?php $consulta="SELECT a.Titulo FROM atividades a where a.id_Atividade"; ?>
    $con = $mysqli->query($consulta) or die($mysqli->error);
   var percent = Math.round(event.loaded * 100 / event.total); //cálculo simples de porcentagem.
  document.getElementById('progress').value = percent; //atualiza o valor da progress bar.
  } else {
    document.getElementById('progress').value = 50; //atualiza o valor da progress bar.
  }
}
</script>
                 <div class="percent">
                    <div class="progress-bar" id="progress" onload="Progress" >
                        <div class="quanthrs">30 Horas</div>
                    </div>

                  
                </div>


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
                            <td class="letra"><a href="Atividade.php" target="post"><?php echo $dado["Titulo"]; ?></a></td>
                            <td class="letra"><?php echo $dado["Duracao"]; ?></td>
                            <td class="letra">&nbsp;&nbsp;<?php echo $dado["Datacon"]; ?></td>
                            <td class="letra">&nbsp;&nbsp;<?php echo $dado["status"]; ?></td>
                        </tr>
                       
                       
                     <?php }?>
                    </table>
                </div>

            </div>

            <aside>
               <iframe frameborder="0" src="Atividade.php" height="600" width="580" name="post" style="border: 3px solid #bebebe; border-radius: 60px;"></iframe>
            </aside>
        </div>
    </div>

</body>
</html>