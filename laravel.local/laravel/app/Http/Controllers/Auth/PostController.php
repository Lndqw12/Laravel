<?php namespace App\Http\Controllers;

use App\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {

    public function index()
    {
        $posts = Post::all();
        return view ('post.index', ['post' => $posts]);
    }

    public function create()
    {
        //
    }

}

