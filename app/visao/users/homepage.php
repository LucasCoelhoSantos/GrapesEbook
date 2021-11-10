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
        <section>
            <div class="container">
                <div class="slogan">
                    <h2>Os verdadeiros analfabetos são os que aprenderam a ler e não leem</h2>
                    <h2>Uma plataforma para todos os gostos de leitura</h2>
                </div>

                <div class="ilustration">
                    <img src="images/slogan.svg" alt="imagem ilustrativa">
                </div>
            </div>
        </section>

        <div class="search-bar">
            <input type="text" placeholder="Procure pelo nome de um e-book!"/>
            <button><ion-icon name="search-outline"></ion-icon></button>
        </div>

        <section class="cards">
            <div class="recommendation">
                <h2>Recomendações</h2>
                <div class="showcase">
                    <button><ion-icon name="arrow-round-back"></ion-icon></button>
                    <img src="images/ebook-o-reino-da-rosa-negra.png" alt="O reino da rosa negra">
                    <img src="images/ebook-uma-dobra-no-tempo.png" alt="Uma dobra no tempo">
                    <img src="" alt="">
                    <button><ion-icon name="arrow-round-forward"></ion-icon></button>
                </div>
            </div>

            <div class="best-sellers">
                <h2>Mais vendidos</h2>
                <div class="showcase">
                    <button><ion-icon name="arrow-round-back"></ion-icon></button>
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                    <button><ion-icon name="arrow-round-forward"></ion-icon></button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <?php include('app/visao/users/footer.php')?>
    </footer>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>