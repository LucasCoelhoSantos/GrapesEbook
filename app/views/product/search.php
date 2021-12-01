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
            <span>Filtros de busca</span>
            <ul>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
            </ul>
        </section>

        <main>        
            <div>
                <?php if (is_null($data) || count($data) === 0) { ?>
                    <div>
                        <span>Infelizmente ainda não temos nenhum Ebook com esse nome :(</span>
                    </div>
                <?php } else { ?>
                    <?php foreach ($data as $product) { ?>
                        <div class="product-card">
                            <!--
                                TO DO - Implementar foto do produto
                            -->
                            <form action="<?= BASEPATH ?>product/detail" method="GET">
                                <div><h2><?= $product->nome?></h2></div>
                                <div><span>Autor: <?= $product->autor?></span></div>
                                <div><span><img src="#" alt="imagem: <?= $product->nome ?>"></span></div>
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