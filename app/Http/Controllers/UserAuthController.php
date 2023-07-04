<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
        public function index(): View|\Illuminate\Foundation\Application|Factory|Application
        {
        return view('user', ['user' => Auth::user()]);
    }
}
