<?php


namespace App\Http\Controllers;


class PostController extends Controller
{
    public function index()
    {
        return view("index", ['title'=>'Post controller']);
    }
}
