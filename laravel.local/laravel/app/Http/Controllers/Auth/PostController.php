<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Post;

use Carbon\Carbon;

class PostController extends Controller {

    public function index()
    {
        //$posts = Post::latest('published_at')->get();
        $posts = Post::latest('published_at')
            ->where('published_at', '<=', Carbon::nov())
            ->get();
        return view ('post.index', ['post' => $posts]);
    }

    public function create()
    {
        //
    }

}

