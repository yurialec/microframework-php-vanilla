<h1>Editar Bloco de anotação</h1>

<?php
    if (!empty($data['mensagem'])):
        foreach($data['mensagem'] as $m):
            echo $m."<br>";
        endforeach;
    endif;
?>

<form action="/notes/editar/<?= $data['registros']['id'] ?>" method="POST">
    <input type="text" value="<?= $data['registros']['titulo'] ?>" name="titulo"><br>
    <textarea name="texto"><?= $data['registros']['texto'] ?></textarea><br>
    <button class="waves-effect waves-light btn" name="atualizar">Atualizar</button>
</form>
