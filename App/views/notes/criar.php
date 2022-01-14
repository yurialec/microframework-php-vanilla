<h1>Criar Bloco de anotação</h1>

<?php
    if (!empty($data['mensagem'])):
        foreach($data['mensagem'] as $m):
            echo $m."<br>";
        endforeach;
    endif;
?>

<form action="/notes/criar" method="POST">
    <input type="text" placeholder="Título" name="titulo"><br>
    <textarea placeholder="Texto" name="texto"></textarea><br>
    <button class="waves-effect waves-light btn" name="cadastrar">Cadastrar</button>
</form>