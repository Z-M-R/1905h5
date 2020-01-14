<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
     //注册
     public function reg()
     {
         return view('user.reg');
     }
}
