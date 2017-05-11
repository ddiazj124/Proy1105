<?php
include '../lib/Conexion.php';


$conn = new Conexion();

$conn->Conectar();

$nombre = $_POST["nombre"];
$total = $_POST["totalusd"];
$anio = $_POST["ano"];

$query = "INSERT INTO PRODUCTOS (nombre,totalusd,ano) values($nombre,$total,$anio)";

$conn->objconn->query($query);