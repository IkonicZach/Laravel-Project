<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductInsertFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductInsertFormRequest $request)
    {
        $file = $request->file('file');
        $filename = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path() . '/uploads/', $filename);
        // Storage::put('uploads/' . $file->getClientOriginalName(),file_get_contents($file));

        Post::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'content' => $request->get('content'),
            'imgs' => $filename
        ]);

        return redirect('/posts/create')->with('status', 'Created successfully!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
