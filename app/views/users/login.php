<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/base/base.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/login.css">
    <title>Login</title>
</head>

<body>
    <header>
        <?php include('app/views/layout/header.php')?>   
    </header>

    <main>
        <div class="listar">
            <a href="<?= BASEPATH ?>user/list"><ion-icon name="list"></ion-icon></a>
            <a href="<?= BASEPATH ?>user/list"><span>Listar usuários</span></a>
        </div>
        
        <div class="login">
            <form method="POST">
                <!--<.?php require 'app/views/alert.php' ?>-->
                
                <div>
                    <label class="email" for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="exemplo@email.com"  required>
                </div>

                <div>
                    <label class="password" for="password">Senha</label>
                    <input id="password" name="senha" type="password" placeholder="********"  required>
                </div>

                <div class="buttons">
                    <button type="submit">Entrar</button>
                    <a href="<?= BASEPATH ?>register">Desejo me cadastrar.</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>