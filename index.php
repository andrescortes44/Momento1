<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/menu.js"></script>
    <title> MOMENTO 1 </title>
</head>
<body>
    <header>

        <nav class="menu">
            <ul>
                <li><a href="index.php">Ejercicio #6</a></li>
                <li><a href="index2.php">Ejercicio #4</a></li>
                </ul></li>
            </ul>
        </nav>

        <section class="texto-header">
            <h1>Ejercicio #6</h1>
        </section>
        <section class="wade">
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffffff;"></path></svg></div>
    </section>
    </header>

    <main>
        <section class="contenedor">
            <h2 class="titulo">Ingrese el numero de pares</h2>
        
        
        </section>

        <div class="contenedor_form">
            <form action="ejercicio6.php" method="POST">
                <input type="number" placeholder="Número de pares..." class="numeros" name="cantidad" autocomplete="off">
                <button type="submit" name="Enviar" class="boton">Ver números</button>
            </form>
    </div>
            
    </main>

    <footer>
        <div class="contenedor-footer">
            <div class="contenedor-foo">
                <h4>Andés Felipe Cortés Buitrago</h4>
                <p>Grupo viernes noche</p>
            </div>
            
        </div>
    </footer>
</body>
</html>