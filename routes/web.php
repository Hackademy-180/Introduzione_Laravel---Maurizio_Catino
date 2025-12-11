<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/", function (){
    $name = "Maurizio";
    return view("welcome", ["nome" => $name]);
});

Route::get("/Lavora-con-noi", function (){
    $infos = ["1500$", "Tempo indeterminato", "PC aziendale", "Macchina aziendale"];
    return view("Lavora-con-noi", ["infos"=> $infos]);
});

Route::get("/chi-siamo", function(){
    $names = ["Maurizio", "Teo", "Charlie"];
    return view("chi-siamo", ["names" => $names]);
});
