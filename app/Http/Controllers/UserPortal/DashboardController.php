<?php

namespace App\Http\Controllers\UserPortal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view("userportal.dashboard.index");  
    }

}
