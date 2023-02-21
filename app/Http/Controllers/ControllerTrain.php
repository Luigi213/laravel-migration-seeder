<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models;

class ControllerTrain extends Controller
{
    public function index(){
        return view('train_home');
    }
}
