<?php

namespace App\Http\Controllers;

use App/Models/User;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(): View
   {

        $user = User:: find(1);

        return view('index',[
            'users' => $user,
        ]);
   }
}
