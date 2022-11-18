<?php

include("conex.php");

if (isset ($_POST['enviar']))
{
  if (strlen ($_POST['Name']) >=1 && strlen($_POST['Email']) >=1 && strlen($_POST['Message']) >=1)
  {

  $name = trim($_POST('Name');
  $email = trim($_POST('Email');
  $message = trim($_POST('Message');
  $consulta = "INSERT INTO datos (nom,mail,men) VALUES ('$Name','$Email','$Message')";
  $resultado = mysqli_query($conex,$consulta);

  }
}
     


?>
