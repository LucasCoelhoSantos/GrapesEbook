<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/base/base.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/header.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/login.css">
    <title>Cadastrar Produto</title>
</head>

<body>
    <header>
        <?php include('app/views/layout/header.php')?>
    </header>

    <main>
        <div class="register">
            <form method="POST">
                <div>
                    <label>Nome do produto</label>
                    <input type="text" id="nome" name="nome" placeholder="Nome do produto" required>
                </div>

                <div>
                    <label>Autor</label>
                    <input type="text" id="autor" name="autor" placeholder="Autor da obra" required>
                </div>

                <div>
                    <label>Descrição</label>
                    <input type="text" id="descricao" name="descricao" placeholder="Breve descrição do produto..." required>
                </div>

                <div>
                    <label>Preço</label>
                    <input type="number" id="preco" name="preco" placeholder="No máximo 1000" min="1" max="1000" required>
                </div>

                <div>
                    <label>Quantidade</label>
                    <input type="number" id="quantidade" name="quantidade" placeholder="No máximo 1000" min="1" max="1000" required>
                </div>

                <div>
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>