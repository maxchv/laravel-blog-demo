@extends('layouts.app')

@section('title', $title)

@section('content')

    <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
    </h1>

    @isset($post)
        @forelse($posts as $post)
            <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text">{{$post->text}}</p>
                    <a href="#" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on {{$post->create_at}}
                    <a href="#">{{$post->autor}}</a>
                </div>
            </div>
        @empty
            <p>No post found</p>
        @endforelse
    @endisset



    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
        </li>
    </ul>
@endsection
