<div class="jumbotron">
    <?php
    $read = read('conteudo');
    foreach($read as $val){
        //Aqui é facilmente, possivel fazer de uma forma dinamica pela url que esta acessando exibir o conteudo.
        //Fazendo assim com que tenha apenas uma pagina de conteudo, com apenas um esqueleto do layout.
        if($val['pagina'] === "contato"){
            echo "<h1>{$val['pagina']}</h1>";
            echo "<p>{$val['conteudo']}</p>";
        }
    }
    ?>

    <?php


    if(isset($_POST['enviar']) && $_POST['enviar'] == "enviar"){

        foreach ($_POST as $campo => $valor) {$$campo = $valor;}

        echo '<div class="jumbotron">';
        echo  '<div class="alert alert-success" role="alert">Mensagem enviada com sucesso, segue os dados enviados.</div> <br />';
        echo "Nome: ".$nome."<br />";
        echo "Email: ".$email."<br />";
        echo "Assunto: ".$assunto."<br />";
        echo "Mensagem: ".$mensagem."<br />";
        echo '</div>';
    }

    ?>

</div><!--./jumboton-->

<div class="container">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <?php if(!isset($_POST['enviar'])): ?>
            <form class="form-horizontal" role="form" action="" method="post">
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input name="nome" type="text" class="form-control" placeholder="Seu nome..">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" placeholder="Seu email..">
                    </div>
                </div>
                <div class="form-group">
                    <label for="assunto" class="col-sm-2 control-label">Assunto</label>
                    <div class="col-sm-10">
                        <input name="assunto" type="assunto" class="form-control" placeholder="Assunto a tratar..">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mensagem" class="col-sm-2 control-label">Mensagem</label>
                    <div class="col-sm-10">
                        <textarea name="mensagem" class="form-control" rows="3" placeholder="Sua mensagem.."></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="enviar" value="enviar" class="btn btn-default">Enviar</button>
                    </div>
                </div>
            </form>

            <?php endif; ?>

        </div>
    </div>
</div>