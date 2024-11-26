<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = [
            ['title' => 'Mode', 'image' => 'fashion.jpeg'],
            ['title' => 'Mariage', 'image' => 'mariage.jpeg'],
            ['title' => 'Bébé', 'image' => 'bebe.jpeg'],
            ['title' => 'business', 'image' => 'business.jpeg'],
            ['title' => 'culinaire', 'image' => 'culinaire.jpeg'],
            ['title' => 'soutenance', 'image' => 'pfe.png']
        ];

        return view('home', compact('categories'));
    }
}


