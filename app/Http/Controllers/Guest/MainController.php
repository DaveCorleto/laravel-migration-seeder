<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importo il Model 

use App\Models\Trains;

class MainController extends Controller
{
    public function index (){

        $trains = Trains :: all ();

        return view('pages.index', compact('trains'));
    }
}
