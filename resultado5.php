<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/ejercicio6.css">
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
            
        <?php 
                if(isset($_POST["Enviar"])){
                    $nombre=$_POST["nombre"];
                    $horas=$_POST["horas"];
                    $horasDeTrabajo=40;
                    $total=0;
                    $total1=0;
                    $horasExtras=0;
                    $totalExtra=0;

                    if($horas<=$horasDeTrabajo){
                        $total=$horas*20000;
                        $total1=$total;
                        $totalExtra=0;
                    }
                    else if($horas>$horasDeTrabajo){
                        $horasExtras=$horas-$horasDeTrabajo;
                        $total= $horasDeTrabajo*20000;
                        $totalExtra=$horasExtras*25000;
                        $total1=$total+$totalExtra;
                    }

                }
           ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Señor/ra</th>
      <th scope="col">Salario Base</th>
      <th scope="col">Horas extras</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo($nombre)?></th>
      <td><?php echo($total)?></td>
      <td><?php echo($totalExtra)?></td>
      <td><?php echo($total1)?></td>
    </tr>
  </tbody>
</table>

    
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