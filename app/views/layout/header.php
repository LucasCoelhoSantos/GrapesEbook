<link rel="stylesheet" href="publico/base/base.css">
<link rel="stylesheet" href="publico/layout/header.css">

<div class="container">
    <div class="left-logo">
        <a href="<?= BASEPATH ?>homepage"><ion-icon name="book"></ion-icon></a>
        <a href="<?= BASEPATH ?>homepage"><span>Grapes Ebook</span></a>
    </div>

    <div class="menu-section">
        <div class="menu-toggle">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
        </div>

        <nav class="middle-menu-bar">
            <ul>
                <li><a href="<?= BASEPATH ?>homepage">Início</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Pagamentos</a></li>
                <li><a href="#">Suporte</a></li>
            </ul>
        </nav>
    </div>

    <div class="right-profile">
        <a href="#"><ion-icon name="cart"></ion-icon></a>
        <a href="<?= BASEPATH ?>login"><ion-icon name="person"></ion-icon></a>
        <!-- TO DO
        Esta parte será aplicada quando o usuário fizer login
        <a href="<.?= BASEPATH ?>login">
            <img src="images/profile_icon_1.png" alt="foto de perfil" name="menu-outline">
        </a>
        -->
    </div>
</div>

<script src="scripts\header.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>