<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Гостевая книга на Laravel 5.1',
       'users' =>[
       ['name' =>'Vasya'],
       ['name' =>'Igor'],
        ['name' =>'Dima'],
        ]
        ];
        return view('pages.messages.dom',$data);
    }
    public function edit($id)
    {
        dd($id);
return view('pages.messages.edit');
    }
}
