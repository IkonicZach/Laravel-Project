@section('title', 'Home')
@extends('layout.master')
@section('content')

@include('layout.sidebar')
<div class="container">
    <!-- Posts section starts here -->
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-6">
                    <div class="card rounder">
                        <img src="{{asset('/uploads/'.unserialize($post->imgs)[0])}}" class="card-img-top rounder-top"
                            alt="...">
                        <div class="card-body position-relative">
                            <div class="d-flex">
                                <h5 class="card-title"><a href="/" class="text-echo">{{$post->title}}</a></h5>
                                <small class="text-secondary">@include('posts.created_at')</small>

                            </div>
                            <p class="card-text">{{substr($post->description, 0, 150)}}...</p>
                            <div class="d-flex justify-content-end">
                                <a href="" class="btn btn-echo me-1">View more</a>
                            </div>
                        </div>

                        <a href="/posts/{{$post->id}}/add" class="btn btn-light bookmark"><i
                                class="fa-regular fa-bookmark"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">An active item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>
        </div>
    </div>
    <!-- Posts section ends here -->
</div>
@endsection