<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index($age = 0){
        $name = (object)[];
        $name->fname = 'Mark James';
        $name->mname = 'B';
        $name->lname = 'Agustin';

        return view('home', compact('name','age'));
    }
}