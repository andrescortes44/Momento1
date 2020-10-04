<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/indexEjercicio4.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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
            <h1>Ejercicio #4</h1>
        </section>
        <section class="wade">
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffffff;"></path></svg></div>
    </section>
    </header>
<div class="contenedor-imagen">
    <img src="https://www.las2orillas.co/wp-content/uploads/2016/10/postobonlogo.jpg" alt="">
    </div>

    <section class="contenedor">
            <h2 class="titulo">Ingrese sus datos</h2>
        
        
        </section>
<div class="contenedor-table">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Horas trabajada</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <form action="resultado5.php" method="POST">
      <th scope="row">1</th>
      <td><input type="text" placeholder="Ingrese nombre..." name="nombre" class="cuadros" autocomplete="off"></td>
      <td><input type="number" placeholder="Ingrese horas trabajadas..." name="horas" class="cuadros"></td>
    </tr>
  </tbody>
</table>

<button type="submit" name="Enviar" class="boton">ENVIAR</button>
</form>

</div>
    
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