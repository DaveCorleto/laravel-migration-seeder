<?php

use Illuminate\Support\Facades\Route;
// Importo il Controller 
use App\Http\Controllers\Guest\MainController;

// imposto il controller nella route in modo che anzichè ritornarmi semplicemente la pagina vada 
// a usare MainCOntroller 

Route::get('/', [MainController :: class, 'index'] );
