<?php include("pila.php");
$p=new pila();
$p->insertar("hola");
$p->insertar("buenas");
$p->insertar("tardes");
$p->mostrar();
$p->eliminar();
$p->mostrar();

