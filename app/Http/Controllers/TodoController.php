<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create()
    {
        return view('create');
    }
    public function store()
    {
        // 
    }
    public function edit()
    {
        // 
    }
    public function update()
    {
        // 
    }
    public function delete()
    {
        // 
    }
}
