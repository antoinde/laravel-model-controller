<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    //
    public function getMovies(){

        //recupero films
        $films=Movie::all();

        //li preparo in memoria in un array associativo
        $data=[
            'films' => $films
        ];

        //restituisco i dati a home
        return view('home', $data);
    }
}
