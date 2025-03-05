<?php

$host = "localhost";
$user = "root";
$pass = "2wedf";
$db = "cursophp";


$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
  echo "Erro na conexão";
  echo "Erro: " . mysqli_connect_error();
}