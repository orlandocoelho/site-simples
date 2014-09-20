<div class="jumbotron">
    <h2>Home</h2>
    <form method="post" action="actions">
        <div class="form-group">
            <textarea name="textarea" class="textarea">
                <?php
                    $find = find('home');
                    echo $find['conteudo'];
                ?>
            </textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="<?=$find['id']?>" />
            <input type="hidden" name="pg" value="home" />
           <button type="submit" class="btn btn-success" name="submit" value="update">Enviar</button>
        </div>
    </form>
</div><!--./jumboton-->