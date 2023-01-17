<?php

/**
*    Design patterns / Creational patterns / Singleton
*    Паттерны проектирования / Порождающие паттерны / Одиночка
 */

include("Singleton.php");

$singleton = new Singleton();
$singleton->getInstance();
$singleton->sayHello();
