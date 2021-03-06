﻿<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Brazilian Association - KW</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Noticia+Text|Open+Sans" rel="stylesheet">

    
    <!-- Bootstrap and CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/contactvalidation.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container-fluid"> <!-- Start of master div -->
        
        <div class="row"> <!-- start row 01 -->
           
            <!-- Page header - Nav Bar Menu -->
            <nav class="navbar navbar-inverse navbar-fixed-top border-0" id="navbar">
                <div class="container-fluid">
                    <!-- Nav Bar title -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="../index.html">Brazilian Association</a>
                    </div>
                    <!-- Nav bar Menu -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="../index.html">Home <span class="sr-only"></span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">A Associação<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="eventos.html">Eventos</a></li>
                                    <li><a href="anuncios.html">Anúncios</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="parceiros.html">Nossos parceiros</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="sobre.html">Sobre nós</a></li>
                                </ul>
                            </li>
                            <li><a href="forum.html">Forum</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dicas e tutoriais <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="dicasbrasil.html">Imigração</a></li>
                                    <li><a href="dicasbrasil.html">Estudo no Canadá</a></li>
                                    <li><a href="dicasbrasil.html">Trabalho no Canadá</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="dicascanada.html">Primeiros passos</a></li>
                                    <li><a href="dicascanada.html">Habilitação</a></li>
                                    <li><a href="dicascanada.html">OHIP</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="contato.html">Contato</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Entrar</a></li>
                            <li><a href="#">Registrar-se</a></li>
                        </ul>
                        <form class="navbar-form navbar-right">
                            <!--Search bar-->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Busca">
                            </div>
                            <button type="submit" class="btn btn-default">Busca</button>
                        </form><!--End of Search bar-->

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><img src="../img/canadaicon.ico"/>English</a></li>
                            <li><a href="#"><img src="../img/brasilicon.ico" />Portuguese</a></li>
                        </ul>


                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div><!-- end row 01 -->

        <hr />
        
        <div class="row"><!-- Start row 02 -->

            <h2 style="padding-top:0em;">Contato</h2>
            <p>Seja bem vindo à associação de brasileiros em Kitchener-Waterloo.</p>
            <p>Preencha os campos abaixo para entrar em contato conosco.</p>

            <div class="form-group">
                
                <form name="ContactForm" onsubmit="return ValidateForm()" action="contact.php" method="post">
                    <p>Nome:</p>
                    <input id="fname" type="text" name="firstName">
                    <p>Sobrenome:</p>
                    <input id="lname" type="text" name="lastName">
                    <p>Email:</p>
                    <input id="email" type="text" name="email">
                    <p>Mensagem:</p>
                    <textarea id="message" rows="10" cols="40" name="message"></textarea>
                    <br />
                    <input class="btn btn-default" id="button" type="reset" value="Reset">
                    <input class="btn btn-default" id="button" type="submit" value="Enviar"><br>

                </form>

                <span id="errormessage"></span>

				
				<?php
					include ("formValidation.php");

					$contactFiels = array('firstName', 'lastName','email','message');
					$contactInfo = array();
					
					for($i = 0; $i < count($contactFiels); $i++)
					{
						if (!isset($_POST[$contactFiels[$i]]) || $_POST[$contactFiels[$i]] == '')
						{
							echo "<h3>Todos os campos devem ser preenchidos.</h3>";
							return false;
						}
						else
						{
							$contactInfo["$contactFiels[$i]"] = $_POST["$contactFiels[$i]"];
						}
					}

					if (ValidateContact($contactInfo)==true)
					{
						
						//mail("dbrunob@gmail", "Contato da associação", $contactInfo['message'], $contactInfo['email']);
						
						echo "<h3>Sua mensagem foi enviada.</h3>";
					}



					

				?>


            </div>


        </div><!-- end row 02 -->
        

    </div><!-- End of master div -->

    



    <footer class="container-fluid"><!-- Start of footer -->

        <div class="container">

            <a href="contato.html">Entre em contato</a> 
            <p>Copyright&copy; - All rights reserved</p>


        </div>



    </footer><!--End of footer  -->

    
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/transition.js"></script>
    <script src="../js/collapse.js"></script>











</body>
</html>