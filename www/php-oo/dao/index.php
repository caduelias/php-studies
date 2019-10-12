<?php

require_once("config.php");

// $consulta = new Sql();

// $resultado = $consulta->select("SELECT * FROM pessoa");

// echo json_encode($resultado);


$user = new Usuario();

$user->loadById(1);

echo $user;