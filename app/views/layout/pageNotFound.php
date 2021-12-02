<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/base/base.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/base/pageNotFound.css">
    <title>Página não encontrada</title>
</head>

<body>
    <header>
        <?php include('app/views/layout/header.php')?>
    </header>
    
    <main>
        <div>
            <p>A página que você está procurando não existe :(</p>
            <img src="images/illustration/page-not-found.svg" alt="Imagem page not found!">
            <a href="<?= BASEPATH ?>homepage">Voltar</a>
        </div>
    </main>
</body>
</html>