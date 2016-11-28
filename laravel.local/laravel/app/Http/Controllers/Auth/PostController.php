<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {

    public function index()
    {
        $posts = Post::latest()->get();
        return view ('post.index', ['post' => $posts]);
    }

    public function create()
    {
        //
    }

}

