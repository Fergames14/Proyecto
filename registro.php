<?php
  $conexion=mysql_connect("localhost","root","") or die ("Problemas con la conexion");
  mysql_select_db("proyecto",$conexion); or die ("Probelmas con la conexion");
  $nombre=$_POST['nombre'];
  $pass = $_POST['pass'];
  $email = $_POST['email'];

  mysql_query("INSERT INTO Usuario (nombre,email,pass) VALUES ('$nombre','$email','$pass')",$conexion);
?>
