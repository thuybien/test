<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateForm;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'thuynt1';
        return view('home', ['name' => $name]);
    }

    public function form(ValidateForm $request)
    {
        echo $request->get('username');
    }
}
