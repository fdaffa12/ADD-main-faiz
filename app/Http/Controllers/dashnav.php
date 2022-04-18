<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashnav extends Controller
{
     public function dashboard(){return view('dashboard/dashboard');}
     public function dashprim(){return view('dashboard/primary');}
     public function dashsec(){return view('dashboard/secondary');}
}
