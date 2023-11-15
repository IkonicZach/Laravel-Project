@extends('layout.master')

@section('title','Create post')

@section('content')
<div class="container">
    <div class="w-75 rounder border p-5 shadow-lg" style="margin: 0 auto;">
        <h1>Create a <span class="text-echo">new</span> blog</h1>
        <form class="row g-3" method="post">
            <div class="">
                <label for="inputAddress" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="inputAddress" placeholder="Name your blog">
            </div>
            <div class="">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Provide a short description about your blog"
                    id="description"></textarea>
            </div>
            <div class="">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" name="content" placeholder="What's on your mind?" id="content"
                    style="height: 10rem;"></textarea>
            </div>
            <div class="col-md-6">
                <label for="category" class="form-label">Category</label>
                <select id="category" name="category" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="formFile" class="form-label">Upload an image</label>
                <input class="form-control" name="file" type="file" id="formFile">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="comments" checked>
                    <label class="form-check-label" for="comments">Comments</label>
                    <small> *(If disabled, people won't be able to comment on this blog.)</small>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-echo float-end">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection