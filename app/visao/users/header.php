<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEPATH ?>publico/estilos/header.css">
</head>

<header>
    <div class="left-logo">
        <img id="logo" src="images/logo.png" alt="Logo Grape E-Books">
    </div>

    <nav>
        <ul class="middle-menu-bar">
            <li><a href="#">Início</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Pagamentos</a></li>
            <li><a href="#">Suporte</a></li>
        </ul>
    </nav>

    <div class="right-profile">
        <a href="#"><ion-icon name="cart"></ion-icon></a>
        <a href="<?= BASEPATH ?>login"><img src="images/profile_icon_1.png" alt="foto de perfil" name="menu-outline"></a>
    </div>
    
    <!--
    <nav class="middle-side-bar">
        <a href="#"  onclick="closePerfil()">
            <ion-icon name="close"></ion-icon>
            <span>Fechar</span>
        </a>
        <a href="homepage.html">
            <ion-icon name="home-sharp"></ion-icon>
            <span>Inicio</span>
        </a>
        <a href="profilepage.html">
            <ion-icon name="person"></ion-icon>
            <span>Meu perfil</span>
        </a>
        <a href="carrinho.html">
            <ion-icon name="cart"></ion-icon>
            <span>Meu carrinho</span>
        </a>
        <a href="#" class="about-us">
            <ion-icon name="globe"></ion-icon>
            <span>Sobre nós</span>
        </a>
    </nav>
    -->
</header>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>