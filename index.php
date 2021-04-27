<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de camisetas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   <!-- CABECERA --> 
    <header id="header">
        <div id="logo">
            <img src="assets/img/camiseta.png" alt="Camiseta logo">
            <a href="index.php">
                Tienda de camisetas
            </a>
        </div>
    </header>

   <!-- MENU --> 
    <nav id="menu">
        <ul>
            <li>
                <a href="#">Inicio</a>
            </li>
            <li>
                <a href="#">Categoría 1</a>
            </li>
            <li>
                <a href="#">Categoría 2</a>
            </li>
            <li>
                <a href="#">Categoría 3</a>
            </li>
            <li>
                <a href="#">Categoría 4</a>
            </li>
            <li>
                <a href="#">Categoría 5</a>
            </li>
        </ul>

    </nav>

    <div id="content">
        <!-- BARRA LATERAL --> 
        <aside id="lateral">
            <div id="login" class="block_aside">
                <form action="#" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Contaseña</label>
                    <input type="password" name="password">
                    <input type="submit" value="Enviar">
                </form>

                <a href="#">Mis pedidos</a>
                <a href="#">Gestionar pedidos</a>
                <a href="#">Gestionar categorías</a>
            </div>
        </aside>

        <!-- CONTENIDO CENTRAL --> 
        <div id="central">

            <div class="product">
                <img src="assets/img/camiseta.png" alt="camiseta">
                <h2>Camiseta azul ancha</h2>
                <p>30 euros</p>
                <a href="">Comprar</a>
            </div>

            <div class="product">
                <img src="assets/img/camiseta.png" alt="camiseta">
                <h2>Camiseta azul ancha</h2>
                <p>30 euros</p>
                <a href="">Comprar</a>
            </div>

            <div class="product">
                <img src="assets/img/camiseta.png" alt="camiseta">
                <h2>Camiseta azul ancha</h2>
                <p>30 euros</p>
                <a href="">Comprar</a>
            </div>

        </div>
    </div>

   <!-- PIE DE PÁGINA --> 
   <footer id="footer">
       <p>Desarrollado por Adrián Fraga Cortés &copy; <?=date('Y')?></p>
   </footer>
</body>
</html>