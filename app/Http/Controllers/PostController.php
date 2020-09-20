<?php


namespace App\Http\Controllers;


class PostController extends Controller
{
    public function index()
    {
        $posts = [];
        return view("index", ['title' => 'Post controller', 'posts'=>$posts]);
    }

    public function show($id)
    {
        return view('post.index', ['title' => 'Post info', 'id' => $id]);
    }
}
