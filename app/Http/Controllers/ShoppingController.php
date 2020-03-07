<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index(){
        return view('shopping.index');
    }

    public function single(){
        return view('shopping.single');
    }
}
