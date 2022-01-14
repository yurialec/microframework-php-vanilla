<br>
<?php

use App\Core\App;
use App\Pagination;

if (!empty($data['mensagem'])) :
    foreach ($data['mensagem'] as $m) :
        echo $m . "<br>";
    endforeach;
endif;
?>

<?php
//Paginação
$pagination = new Pagination($data['registros'], isset($_GET['page']) ? $_GET['page'] : 1, 5);
?>

<div class="row container">
    <?php foreach ($pagination->resultado() as $note) : ?>
        <h1><a href="/notes/ver/<?= $note['id'] ?>"><?= $note['titulo'] ?><a></h1>
        <p><?= $note['texto'] ?></p>

        <?php if (isset($_SESSION['logado'])) : ?>
            <a class="waves-effect waves-light btn orange" href="/notes/editar/<?= $note['id'] ?>">Editar</a>
            <a class="waves-effect waves-light btn red" href="/notes/excluir/<?= $note['id'] ?>">Excluir</a>
        <?php endif; ?>
        <hr>
        <br>
    <?php endforeach; ?>
    <?php
    //Navegação
    $pagination->navigator();
    ?>
</div>