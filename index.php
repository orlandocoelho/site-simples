<?php
require_once("inc/function.php");
?>

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
            <div class="row">
                <div class="col-lg-2">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">SITE SIMPLES</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="" method="post">
                        <div class="input-group text-right" style="margin-top: 10px;">
                            <span class="input-group-btn">
                                <button class="btn btn-default" name="busca" value="busca" type="submit">Go!</button>
                            </span>
                                <input type="text" name="textbusca" class="form-control">
                        </div><!-- /input-group -->
                    </form>
                </div>
                <div class="col-lg-6">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="home">Home</a></li>
                            <li><a href="empresa">Empresa</a></li>
                            <li><a href="produtos">Produtos</a></li>
                            <li><a href="servicos">Serviços</a></li>
                            <li><a href="contato">Contato</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </nav>

    <?php
        if(isset($_POST['busca']) && $_POST['busca'] == 'busca'){
            $text = $_POST['textbusca'];
            busca($text);
        }else if(!isset($_POST['busca'])){
            checks();
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