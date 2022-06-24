<html>
  <head> 
     <title> Compra </title>
  </head>

    <body bgcolor = green>

   <font face = Cooper color = white> <h1 align = center> <h1 align = center> Aires Acondicionados </h1> </font>

 <?php
 echo "<center>";
   echo "<font face = Cooper>";
   echo "<br>Nombre: ";
   echo $_REQUEST['nom'];

   if($_REQUEST['radio1'] == "aire1") {
    $aire1 = $_REQUEST['valor1'];
   echo "<br>";
    echo "El producto comprado es: Aire Acondicionado de 1 tonelada";
   echo "<br>";
    echo "El precio es: 10,000" .$aire2; 
   echo "<br>";
    echo "Metodo de pago: " .$radio2;
  } else {

     if ($_REQUEST['radio1'] == "aire2") {
       $aire2 = $_REQUEST['valor1'] - $_REQUEST['valor2'];
   echo "<br>";
    echo "El producto comprado es: Aire Acondicionado de 1/2 toneladas";
   echo "<br>";
        echo "El precio es: 15,000" .$aire2; 
   echo "<br>";
    echo "Metodo de pago: " .$radio2;  

     }
    }

   if($_REQUEST['radio1'] == "aire3") {
    $aire3 = $_REQUEST['valor1'];
   echo "<br>";
    echo "El producto comprado es: Aire Acondicionado de 2 toneladas";
   echo "<br>";
    echo "El precio es: 20,000" .$aire3;
   echo "<br>";
    echo "Metodo de pago: " .$radio2;
}

   echo "<font face = Cooper>";
 echo "</center>";
 ?>

  <br>
  <br>

  <center>
    <input type = "button" value = "Regresar" onclick = "window.location = 'airesacondicionados.php';">
  </center>

  <br>
  <br>
 </body>
</html>