<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function __construct()
    {
        //$this->middleware('admin')->only('create', 'destroy', 'store');
        //$this->middleware('auth')->except('create', 'destroy', 'store');
        $this->middleware('auth');

    }

    public function index(Request $request)
    {
        return view('home');
    }
}
