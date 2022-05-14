<main>
<section>
    <a href="index.php">
        <button class="btn btn-succes">Voltar</button>
    </a>

</section>
    <h2 class="mt-3"><?=TITLE?></h2>
<form method="post">

    <div class="form-group">
        <label>Título</label>
        <input type="text" class="form-control" name="titulo" value="<?=$obVaga->titulo?>"> <!-- campo de texto comum -->
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <textarea class="form-control" name="descricao" rows="5"><?=$obVaga->descricao?></textarea>
    </div>

    <div class="form-group">      <!-- criação do hardbutton para ativo ou inativo-->
        <label>Status</label>
        <div>
            <div class="form-check form-check-inline">
                <label>
                    <input type="radio" name="ativo" value="s" checked  >Ativo
                </label>
            </div>

            <div class="form-check form-check-inline">
                <label>
                    <input type="radio" name="ativo" value="n" <?=$obVaga->ativo == 'n' ? 'checked' : ''?> >Inativo
                </label>
            </div>

        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button> <!-- botao de enviar -->
    </div>

</form>
</main>