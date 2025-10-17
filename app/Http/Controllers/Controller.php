<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //

    public function cleanUpperCaseString($string): string {
        // remove spaces and convert to uppercase
        // converte a string para maiusculas e remove espacos
        return strtoupper(trim($string));    
    }
}
