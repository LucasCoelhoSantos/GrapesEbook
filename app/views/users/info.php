<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/base/base.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/header.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/footer.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/info.css">
    <title>Meus dados</title>
</head>

<body>
    <header>
        <?php include('app/views/layout/header.php')?>
    </header>
    
    <main>
        <div class="cadastrar-produtos">
            <a href="<?= BASEPATH ?>product/register"><ion-icon name="create"></ion-icon></a>
            <a href="<?= BASEPATH ?>product/register"><span>Cadastrar Produto</span></a>
        </div>

        <div class="informacao">
            <form method="POST" action="<?= BASEPATH ?>logout">
                <div>
                    <label for="name">Nome</label>
                    <input id="name" value="<?= $data->nome ?>" disabled>
                </div>

                <div>
                    <label for="email">Email</label>
                    <input id="email" value="<?= $data->email ?>" disabled>
                </div>

                <div>
                    <label for="password">Senha</label>
                    <input id="password" value="<?= $data->senha ?>" disabled>
                </div>
                
                <div>
                    <button type="submit">Sair</button>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <?php include('app/views/layout/footer.php')?>
    </footer>
</body>
</html>