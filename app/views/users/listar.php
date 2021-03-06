<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/base/base.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/publico/layout/list.css">
    <title>Usuários Cadastrados</title>
</head>

<body>
    <div class="back">
        <a href="<?= BASEPATH ?>login"><ion-icon name="arrow-back"></ion-icon><span>Voltar</span></a>
    </div>

    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                <?php if (is_null($data) || count($data) === 0) { ?>
                    <tr>
                        <td colspan="4">Nenhum usuário cadastrado ainda :(</td>
                    </tr>
                <?php } else { ?>
                    <?php foreach ($data as $user) { ?>
                        <tr>
                            <td><?= $user->nome ?></td>
                            <td><?= $user->email ?></td>
                            <td><?= $user->senha ?></td>
                            <td>
                                <form action="<?= BASEPATH ?>user/remove" method="POST" class="delete-form">
                                    <input type="hidden" name="email" value="<?= $user->email ?>">
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