<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/base/base.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/homepage.css">
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

                <div class="illustration">
                    <img src="images/illustration-slogan.svg" alt="imagem ilustrativa">
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
                    <button><ion-icon name="arrow-back"></ion-icon></button>
                    <div class="product">
                        <img src="images/ebook-o-reino-da-rosa-negra.png" alt="O reino da rosa negra">
                        <div class="product-information">
                            <h3>O reino da rosa negra</h3>
                            <span>Preço: </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="images/ebook-uma-dobra-no-tempo.png" alt="Uma dobra no tempo">
                        <div class="product-information">
                            <h3>Uma dobra no tempo</h3>
                            <span>Preço: </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="" alt="">
                        <div class="product-information">
                            <h3></h3>
                            <span>Preço: </span>
                        </div>
                    </div>
                    <button><ion-icon name="arrow-forward"></ion-icon></button>
                </div>
            </div>

            <div class="best-sellers">
                <h2>Mais vendidos</h2>
                <div class="showcase">
                    <button><ion-icon name="arrow-back"></ion-icon></button>
                    <div class="product">
                        <img src="" alt="">
                        <div class="product-information">
                            <h3></h3>
                            <span>Preço: </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="" alt="">
                        <div class="product-information">
                            <h3></h3>
                            <span>Preço: </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="" alt="">
                        <div class="product-information">
                            <h3></h3>
                            <span>Preço: </span>
                        </div>
                    </div>
                    <button><ion-icon name="arrow-forward"></ion-icon></button>
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