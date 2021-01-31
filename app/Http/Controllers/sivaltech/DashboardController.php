<?php

namespace App\Http\Controllers\sivaltech;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        

        return view('sivaltech.dashboard.index');
    }
}
