<?php
//crea una nueva página que se llame actividades.php
//incluye un case nuevo que incluya actividades
//en cabecera.php añade un nuevo elemento de lista
include 'cabecera.php';
switch (filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING)) {
    case "inicio":
        include 'inicio.php';
        break;
    case "tarifas":
        include 'tarifas.php';
        break;
    case "login":
        include 'login.php';
        break;
    default:
        include 'inicio.php';
        break;
}
include 'pie.php';
?>
