<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>

<body>
    <main>
        <section>
            <a href="index.php"><button class="btn btn-success">Voltar</button></a>
        </section>

        <h2 class="mt-3"> <?=TITLE?> </h2>

        <form method="post">
            <div class="form-group">
                <label>Nome do produto Produto</label>
                <input type="text" class="form-control" name="nomeProduto" value="<?=$obVaga->titulo?>" require>
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" name="descricaoProduto" rows="5"><?=$obVaga->descricao?></textarea>
            </div>

            <div class="form-group">
                <label>Preço</label>
                <input type="number" name="precoProduto" class="form-control" min="1" max="5000" require>
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" class="form-control" min="1" max="200" require>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </main>
</body>
</html>