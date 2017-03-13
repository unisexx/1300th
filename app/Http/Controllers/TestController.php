<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;

class TestController extends Controller
{
    public function test(){
      $users=DB::select('select * from test');
      var_dump($users);
    }
}
