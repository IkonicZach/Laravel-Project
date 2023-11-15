@section('title', 'Home')
@extends('layout.master')
@section('content')

@include('layout.sidebar')
<div class="container">
    <!-- Posts section starts here -->
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-6">
                    <div class="card rounder">
                        <img src="{{asset('images/wallpaperflare.com_wallpaper.jpg')}}" class="card-img-top rounder-top" alt="...">
                        <div class="card-body position-relative">
                            <h5 class="card-title"><a href="" class="text-echo">Card title</a></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex justify-content-end">
                                <a href="" class="btn btn-echo me-1">View more</a>
                            </div>
                        </div>
                        <a href="" class="btn btn-light bookmark"><i class="fa-regular fa-bookmark"></i></a>
                    </div>
                </div>
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