<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= BASEPATH ?>publico/estilos/base.css">

<header>
    <div class="left-logo">
        <picture>
            <source media="(max-width: 750px)" srcset="images/logo150px.png">
            <source media="(max-width: 1050px)" srcset="images/logo300px.png">
            <img id="logo" src="images/logo300px.png" alt="Logo Grape E-Books">
        </picture>
    </div>

    <nav class="middle-menu-bar">
        <ul>
            <li><a href="#">E-books</a></li>
            <li><a href="#">Audio Livros</a></li>
            <li><a href="#">Mais Vendidos</a></li>
            <li><a href="#">Mais</a></li>
        </ul>
    </nav>

    <div class="right-profile">
        <a href="#"><ion-icon name="cart"></ion-icon></a>
        <img src="images/profile_icon_1.png" alt="foto de perfil" name="menu-outline" onclick="showPerfil()">
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