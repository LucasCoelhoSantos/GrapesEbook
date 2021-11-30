<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/base/base.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/list.css">
    <title>Produtos Cadastrados</title>
</head>

<body>
    <div class="back">
        <a href="<?= BASEPATH ?>user/info"><ion-icon name="arrow-back"></ion-icon><span>Voltar</span></a>
    </div>
    
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Autor</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                </tr>
            </thead>

            <tbody>
                <?php if (is_null($data) || count($data) === 0) { ?>
                    <tr>
                        <td colspan="6">Nenhum produto cadastrado ainda :(</td>
                    </tr>
                <?php } else { ?>
                    <?php foreach ($data as $product) { ?>
                        <tr>
                            <td><?= $product-> id?></td>
                            <td><?= $product-> nome?></td>
                            <td><?= $product-> autor?></td>
                            <td><?= $product-> descricao?></td>
                            <td><?= $product-> preco?></td>
                            <td>
                                <form action="<?= BASEPATH ?>product/remove" method="POST">
                                    <input type="hidden" name="nome" value="<?= $product->nome ?>">
                                    <button type="submit"><ion-icon name="close-outline"></ion-icon></button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>