<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class ControllerTrain extends Controller
{
    public function index(){
        $trains = Train::all();

        return view('train_home', compact('trains'));
    }
}
