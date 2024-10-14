<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class hellowworldcontroller extends Controller
{
    public function index()
    {
        return "Selamat belajar laravel 10";
    }
}