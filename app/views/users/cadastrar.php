<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/base/base.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/login.css">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <?php include('app/views/layout/header.php')?>
    </header>

    <main>
        <div class="register">
            <form method="POST">
                <!--<.?php require 'app/visao/alert.php' ?>-->

                <div>
                    <label class="name" for="name">Nome</label>
                    <input id="name" name="nome" type="text" placeholder="Seu nome" pattern=".{4,}" required>
                </div>

                <div>
                    <label class="email" for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="exemplo@email.com" required>
                </div>

                <div>
                    <label class="password" for="password">Senha</label>
                    <input id="password" name="senha" type="password" placeholder="********" pattern=".{4,}" required>
                </div>

                <div class="buttons">
                    <button type="submit">Cadastrar</button>    
                    <a href="<?= BASEPATH ?>login">Possui cadastro? Entre.</a>
                </div>
            </form>
        </div>
    </main>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>