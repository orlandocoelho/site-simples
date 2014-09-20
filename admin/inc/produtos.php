<div class="jumbotron">

    <h2>Produtos</h2>
    <form method="post" action="actions">
        <div class="form-group">
            <textarea name="textarea" class="textarea">
                <?php
                $find = find('produtos');
                echo $find['conteudo'];
                ?>
            </textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="submit">Enviar</button>
        </div>
    </form>
</div><!--./jumbotron-->