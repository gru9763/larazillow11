<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use resources\js\Pages\Index;

class IndexController extends Controller
{

    public function tetris(){

        return inertia('Tetris');  // to render page always make sure relative path is proper.

    }
}
