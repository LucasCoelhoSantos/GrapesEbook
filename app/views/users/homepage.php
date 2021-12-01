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
        <?php include('app/views/layout/header.php')?>
    </header>

    <main>
        <section>
            <div class="presentation">
                <div class="slogan">
                    <h2>Os verdadeiros analfabetos são os que aprenderam a ler e não leem</h2>
                    <h2>Uma plataforma para todos os gostos de leitura</h2>
                </div>

                <div class="illustration">
                    <img src="images/illustration-slogan.svg" alt="imagem slogan">
                </div>
            </div>
        </section>

        <div class="search-bar">
            <!--
                TO DO - Buscar ebooks disponíveis com base no nome ou autor.
            -->
            <form action="<?= BASEPATH ?>product/search" method="GET">
                <input type="search" name="nome" placeholder="Procure pelo nome ou autor de um e-book!"/>
                <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
            </form>
        </div>

        <!-- 
            TO DO - Aqui os ebooks em destaque, arrumar os livros disponíveis e relacionar com o banco de dados. No momento é apenas um visual do que será apresentado.

            TO FIX - Container onde ficará os ebooks não está responsivo.
        -->
        <section class="ebooks">
            <!--slider-products-->
            <div class="recommendation">
                <h2>Recomendações</h2>
                <div class="products">
                    <button><ion-icon name="arrow-back"></ion-icon></button>
                    <div class="product">
                        <img src="images/ebooks/o-reino-da-rosa-negra.png" alt="O reino da rosa negra">
                        <div class="product-information">
                            <h3>O reino da rosa negra</h3>
                            <span>Preço: </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="images/ebooks/uma-dobra-no-tempo.png" alt="Uma dobra no tempo">
                        <div class="product-information">
                            <h3>Uma dobra no tempo</h3>
                            <span>Preço: </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="images/ebooks/os-miseraveis" alt="Os Miseráveis">
                        <div class="product-information">
                            <h3>Os Miseráveis</h3>
                            <span>Preço: </span>
                        </div>
                    </div>
                    <button><ion-icon name="arrow-forward"></ion-icon></button>
                </div>
            </div>

            <div class="best-sellers">
                <h2>Mais vendidos</h2>
                <div class="products">
                    <button><ion-icon name="arrow-back"></ion-icon></button>
                    <div class="product">
                        <img src="images/ebooks/viagens-de-guliver" alt="Viagens de Guliver">
                        <div class="product-information">
                            <h3>Viagens de Guliver</h3>
                            <span>Preço: </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="images/ebooks/dom-casmurro" alt="Dom Casmurro">
                        <div class="product-information">
                            <h3>Dom Casmurro</h3>
                            <span>Preço: </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="images/ebooks/o-pai" alt="O pai">
                        <div class="product-information">
                            <h3>O pai</h3>
                            <span>Preço: </span>
                        </div>
                    </div>
                    <button><ion-icon name="arrow-forward"></ion-icon></button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <?php include('app/views/layout/footer.php')?>
    </footer>

    <script src="scripts\ebooks.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>