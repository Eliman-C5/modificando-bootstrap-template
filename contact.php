<?php
  include("db.php");
  
  // if ($conex) {
  //   echo "Todo correcto";
  // } else {
  //   echo "Ha ocurrido";
  // }
  
  if (isset($_POST["register"])) {
    if (strlen($_POST["name"]) >= 1 && strlen($_POST["email"]) >= 1 && strlen($_POST["message"]) >= 1) {
      $name = trim($_POST["name"]);
      $email = trim($_POST["email"]);
      $message = trim($_POST["message"]);
      $consulta = "INSERT INTO `datos`(nombre, email, mensaje) VALUES ('$name','$email','$message');";
      $resultado = mysqli_query($conex, $consulta);
    }
  }
?>
