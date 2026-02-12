<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return "Jorge Andrés Luquetta Aguilera";
});

Route::get('/contactanos', function () {
    return view("form");
});

Route::get('/php-basico', function () {

    echo "<h1 style= 'color:red'> Aprendiendo PHP </h1>";

    $name = "Jorge Luquetta";
    $height = 1.82;
    $isLogin = true;
    $age = 20;

    echo "<h2> " . $name . "</h2>";
    echo "<p> " . $name . "</p>";

    echo "<br><br><br> ******************** ESTRUCTURAS DE CONTROL ******************** <br><br>";
    $message = " Soy $name, tengo $age años. ". valadateAge($age);
    $message .= $isLogin ? " Estoy logueado " : " no estoy logueado ";

    echo $message;

    echo "<br><br><br> ******************** ESTRUCTURAS DE DATOS ******************** <br><br>";

    $pc = [
        "name" => "pc Gamer core9",
        "Precio" => 6000,
        "marca" => "Lenovo"
    ];

    $teclado = [
        "name" => "Teclado",
        "Precio" => 200,
        "marca" => "Asus"
    ];

    $listaProductos = [$pc, $teclado];

    foreach ($listaProductos as $item){
        echo $item['name'] . "<br>";
    }

});


function valadateAge($age){
    if ($age >= 18 ){
        return " Soy mayor de edad ";
    }else{
        return"Soy menor de edad"; 
    }
}