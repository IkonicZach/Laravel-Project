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
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('/uploads/'.unserialize($post->imgs)[0])}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-echo">{{$post->title}}</h5>
                                <p class="card-text">{{substr($post->description, 0 , 100)}}...</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated @include('posts.updated_at')</small>
                                </p>
                            </div>
                        </div>
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