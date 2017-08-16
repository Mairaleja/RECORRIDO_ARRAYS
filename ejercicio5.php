<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="css\bootstrap.min.css">
    <title></title>
  </head>
  <body>
    <div class="container">
    <h1 class="alert alert-info"><center>OPERACIONES MATEMATICAS</center></h1>
    <center>
    <form class="alert alert-danger " method="post" >
      1.Numero <input type="number" name="n1" value=""><br><br>
      2.Numero <input type="number" name="n2" value=""><br><br>
      3.Numero <input type="number" name="n3" value=""><br><br>
      4.Numero <input type="number" name="n4" value=""><br><br>
      5.Numero <input type="number" name="n5" value=""><br><br>
      6.Numero <input type="number" name="n6" value=""><br><br>
      7.Numero <input type="number" name="n7" value=""><br><br>
      8.Numero <input type="number" name="n8" value=""><br><br>
      9.Numero <input type="number" name="n9"value=""><br><br>
      10.Numero <input type="number" name="n10" value=""><br><br>
      <input class="btn btn-primary" type="submit" name="" value="CALCULAR">
    </form>
  </center>
    <?php
    if ($_POST) {
      error_reporting(0);
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $n3=$_POST['n3'];
    $n4=$_POST['n4'];
    $n5=$_POST['n5'];
    $n6=$_POST['n6'];
    $n7=$_POST['n7'];
    $n8=$_POST['n8'];
    $n9=$_POST['n9'];
    $n10=$_POST['n10'];
    $numeros=array($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10);
    $suma=$numeros[0]+$numeros[1]+$numeros[2]+$numeros[3]+$numeros[4]+$numeros[5]+$numeros[6]+$numeros[7]+$numeros[8]+$numeros[9];
    $resta=$numeros[0]-$numeros[1]-$numeros[2]-$numeros[3]-$numeros[4]-$numeros[5]-$numeros[6]-$numeros[7]-$numeros[8]-$numeros[9];
    $multiplicacion=$numeros[0]*$numeros[1]*$numeros[2]*$numeros[3]*$numeros[4]*$numeros[5]*$numeros[6]*$numeros[7]*$numeros[8]*$numeros[9];
    $division=$numeros[0]/$numeros[1]/$numeros[2]/$numeros[3]/$numeros[4]/$numeros[5]/$numeros[6]/$numeros[7]/$numeros[8]/$numeros[9];
      echo "la suma de los numeros es: $suma<br>";
      echo "la resta de los numeros es: $resta<br>";
      echo "la multiplicacion de los numeros es: $multiplicacion<br>";
      echo "la division de los numeros es: $division<br>";
      }
     ?>
     </div>
  </body>
</html>
