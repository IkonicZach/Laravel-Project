<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function add(Request $request, $id)
    {
        $items = array();

        if ($request->session()->has('items')) {
            $items = $request->session()->get('items');
            if (!in_array($id, $items)) {
                array_push($items, $id);
            }
        } else {
            array_push($items, $id);
        }
        
        $request->session()->put('items', $items);

        // $request->session()->flush();

        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function show(Request $request)
    {
        $bookmarks = $request->session()->get('items');

        $posts = array();
        for ($i=0; $i < count($bookmarks) ; $i++) { 
            $post = Post::find($bookmarks[$i]);

            array_push($posts, $post);
        }

        return view('bookmarks', compact('posts'));
    }
}