<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

// use Auth;
use DB;
// use App\User;

class HomeController extends Controller {
    public function getIndex() {
        return view('home');
    }
}
