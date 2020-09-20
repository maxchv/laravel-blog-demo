<?php


namespace App\Http\Controllers;


class PostController extends Controller
{
    public function index()
    {
        return view("index", ['title' => 'Post controller']);
    }

    public function show($id)
    {
        return view('post.index', ['title' => 'Post info', 'id' => $id]);
    }
}
