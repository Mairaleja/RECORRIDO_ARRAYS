<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <title></title>
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-info"><center>NUMEROS PARES ASCENDENTES</center></h1>
      <center>
        <form class="alert alert-danger">
            <?php
                foreach (range (0,10,2) as $numeros) {
                echo "$numeros &nbsp";
              }
            ?>
        </form>
      </center>
     </div>
  </body>
</html>
