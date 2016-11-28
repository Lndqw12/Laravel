<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 25.11.2016
 * Time: 16:44
 */
public function __construct()
{
    $this->middieware('quest');
}

public function index()
{
    return view('welcome');
}
}