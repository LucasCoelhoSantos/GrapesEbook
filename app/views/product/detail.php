<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/base/base.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/header.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/footer.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/detail.css">
    <title>Detalhe do produto</title>
</head>

<body>
    <header>
        <?php include('app/views/layout/header.php')?>
    </header>

    <main>
        <div class="details">
            <div><h2>Ebook: <?= $data->nome ?></h2></div>
            <div><span>Autor: <?= $data->autor ?></span></div>
            <div><span>Gênero: <?= $data->genero ?></span></div>
            <div><span><img src="<?= $data->imagem?>" alt="imagem: <?= $data->nome ?>"></span></div>
            <div><span>Descrição: <?= $data->descricao ?></span></div>
            <div class="valor"><span>Valor: R$<?= $data->preco ?>,00</span></div>
        </div>
    </main>

    <footer>
        <?php include('app/views/layout/footer.php')?>
    </footer>
</body>
</html>