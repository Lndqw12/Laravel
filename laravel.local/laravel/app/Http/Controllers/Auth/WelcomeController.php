<?php
{

public function_construct()
{
    $this->middleware('quest');
}

public function indx()
{
    return view('welcome');
}

}