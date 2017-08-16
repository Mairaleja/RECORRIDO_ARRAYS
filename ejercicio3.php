<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <title></title>
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-info"><center>ORDEN ASCENDENTE</center></h1>
      <center>
      <form class="alert alert-danger">
    <?php
        $numeros = array(1,2,3,4,5,6,7,8,9,10);
        sort($numeros);
        foreach ($numeros as $key => $value) {
          echo "[" . $key . "] = " . $value . "<br>";
        }
    ?>
    </form>
  </center>
   </div>
  </body>
</html>
