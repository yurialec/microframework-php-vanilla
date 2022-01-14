<br>
<?php
    if (!empty($data['mensagem'])):
        foreach($data['mensagem'] as $m):
            echo $m."<br>";
        endforeach;
    endif;
?>

<div class="row container">
<h1>Fazer Login</h1>
<form action="/home/login" method="POST">
    <input type="email" name="email" placeholder="E-mail"><br>
    <input type="password" name="senha" placeholder="Senha"><br>
    <button class="waves-effect waves-light btn" name="entrar">Entrar</button>
</form>
</div>
