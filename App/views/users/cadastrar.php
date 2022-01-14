<h1>Cadastar Usuário</h1>

<?php
    if (!empty($data['mensagem'])):
        foreach($data['mensagem'] as $m):
            echo $m."<br>";
        endforeach;
    endif;
?>

<form action="/users/cadastrar" method="POST">
    <input type="text" placeholder="Nome" name="nome"><br>
    <input type="email" placeholder="E-mail" name="email"><br>
    <input type="password" placeholder="senha" name="senha"><br>
    <button class="waves-effect waves-light btn" name="cadastrar">Cadastrar</button>
</form>