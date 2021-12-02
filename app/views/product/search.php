<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/base/base.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/header.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/footer.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/search.css">
    <title>Sua Pesquisa</title>
</head>

<body>
    <header>
        <?php include('app/views/layout/header.php')?>
    </header>

    <div class="filtro">
        <section>
            <span>Filtros:</span>
            <form action="<?= BASEPATH ?>product/search" method="GET">
                <div>
                    <input type="radio" name="genero" value="Ação" required>
                    <label for="Ação">Ação</label>
                </div>

                <div>
                    <input type="radio" name="genero" value="Clássico" required>
                    <label for="Clássico">Clássico</label>
                </div>

                <div>
                    <input type="radio" name="genero" value="Científico" required>
                    <label for="Científico">Científico</label>
                </div>

                <div>
                    <input type="radio" name="genero" value="Fantasia" required>
                    <label for="Fantasia">Fantasia</label>
                </div>

                <div>
                    <input type="radio" name="genero" value="Horror" required>
                    <label for="Horror">Horror</label>
                </div>

                <div>
                    <input type="radio" name="genero" value="Infantil" required>
                    <label for="Infantil">Infantil</label>
                </div>

                <div>
                    <input type="radio" name="genero" value="Romance" required>
                    <label for="Romance">Romance</label>
                </div>
                <button type="submit" class="button">Filtrar</button>
            </form>
        </section>

        <main>
            <div>
                <?php if (is_null($data) || count($data) === 0) { ?>
                    <div>
                        <span>Infelizmente ainda não temos nenhum Ebook desse tipo :(</span>
                    </div>
                <?php } else { ?>
                    <?php foreach ($data as $product) { ?>
                        <div class="product-card">
                            <form action="<?= BASEPATH ?>product/detail" method="GET">
                                <div><h2><?= $product->nome?></h2></div>
                                <div><span>Autor: <?= $product->autor?></span></div>
                                <div><span><img src="<?= $product->imagem?>" alt="imagem: <?= $product->nome ?>"></span></div>
                                <div><span>Gênero: <?= $product->genero?></span></div>
                                <div><span>Preço: R$<?= $product->preco?>,00</span></div>

                                <input type="hidden" name="nome" value="<?= $product->nome ?>">
                                <button type="submit" class="button">Ver detalhes do produto</button>
                            </form>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </main>
    </div>

    <footer>
        <?php include('app/views/layout/footer.php')?>
    </footer>
</body>
</html>