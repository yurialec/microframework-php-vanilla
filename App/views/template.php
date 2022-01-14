<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Curso MVC</title>
</head>

<body>
    <div class="row container">
        <nav class="blue">
            <div class="nav-wrapper container">
                <a href="/" class="brand-logo">Home</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <?php if (isset($_SESSION['logado'])) : ?>
                        <li><a href="/notes/criar">Criar Bloco</a></li>
                        <li><a href="/users/cadastrar">Cadastrar Usuário</a></li>
                    <?php endif; ?>
                    <?php if (!isset($_SESSION['logado'])) : ?>
                        <li><a href="/home/login">Login</a></li>
                    <?php else : ?>
                        Olá: <?= $_SESSION['userNome'] ?>
                        <li><a href="/home/logout">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
        <h2>Bloco de anotações</h2>

        <!-- <img src="<?= URL_BASE; ?>/images/fnx7lj9k4af61.png"><br> -->

        <?php require_once '../App/views/' . $view . '.php'; ?>
    </div>
</body>

</html>