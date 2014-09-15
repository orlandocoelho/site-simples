<div class="jumbotron">
    <?php
    $read = read('conteudo');
    foreach($read as $val){
        //Aqui é facilmente, possivel fazer de uma forma dinamica pela url que esta acessando exibir o conteudo.
        //Fazendo assim com que tenha apenas uma pagina de conteudo, com apenas um esqueleto do layout.
        if($val['pagina'] === "empresa"){
            echo "<h1>{$val['pagina']}</h1>";
            echo "<p>{$val['conteudo']}</p>";
        }
    }
    ?>
        <a role="button" href="#" class="btn btn-lg btn-primary">BOTÃO PÁGINA EMPRESA»</a>
    </p>
</div><!--./jumboton-->