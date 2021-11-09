<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEPATH ?>publico/estilos/base.css">
    <title>Homepage</title>
</head>

<body>
    <header>
        <?php include('app/visao/users/header.php')?>
    </header>

    <main>
        <div class="slogan">
            <p>Os verdadeiros analfabetos são os que aprenderam a ler e não leem</p>
            <p>Uma plataforma para todos os gostos de leitura</p>
        </div>

        <div class="ilustration">
            <img src="images/card.png" alt="imagem ilustrativa">
        </div>

        <div class="search-bar">
            <input type="text" placeholder="Procure pelo nome de um e-book!"/>
            <button><ion-icon name="search-outline"></ion-icon></button>
        </div>

        <div class="recommendation">
            <h2>Recomendações</h2>
            <p>Aqui vai os ebooks recomendados</p>
        </div>

        <div class="best-sellers">
            <h2>Mais vendidos</h2>
            <p>Aqui vai os ebooks mais vendidos</p>
        </div>
    </main>

    <footer>
        <?php include('app/visao/users/footer.php')?>
    </footer>
</body>

</html>