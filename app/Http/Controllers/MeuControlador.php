<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller{
    public function getNome(){
        return "José da Silva";
    }
}