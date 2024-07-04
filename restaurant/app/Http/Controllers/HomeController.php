<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;


class HomeController extends Controller
{
    public function index() {
        $data=food::all();
        return view("home", compact("data"));
    }

    public function redirects() {
        $usertype = Auth::user()->usertype;

        if ($usertype=="1") {
            return view("admin.adminhome");
        }
        else 
        {
            return view("dashboard");
        }
    }




}
