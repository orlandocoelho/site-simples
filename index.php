<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site simples - Foundation fase 1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">

        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SITE SIMPLEX</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="?pg=home">Home</a></li>
                        <li><a href="?pg=empresa">Empresa</a></li>
                        <li><a href="?pg=produtos">Produtos</a></li>
                        <li><a href="?pg=servicos">Serviços</a></li>
                        <li><a href="?pg=contato">Contato</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <?php
            $pg = $_GET['pg'];
            if(!isset($pg) OR $pg == "home"){
                require_once("inc/home.php");
            }elseif($pg == "empresa"){
                require_once("inc/empresa.php");
            }elseif($pg == "servicos"){
                require_once("inc/servicos.php");
            }elseif($pg == "produtos"){
                require_once("inc/produtos.php");
            }elseif($pg == "contato"){
                require_once("inc/contato.php");
            }else{
                require_once("inc/error.php");
            }
        ?>

        <div class="footer">
            <div class="container">
                <p class="text-muted">Todos os direitos reservados - <?php echo date("Y");?></p>
            </div>
        </div>

    </div><!--./container-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>