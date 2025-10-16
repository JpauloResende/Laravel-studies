<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View as View;

class MainController extends Controller
{
    public function initMethod (): string {
       
        return 'hello world';
        $name = 'John Doe';
    }

    public function viewPage(): View {
        
        return view('home');
    }
}
