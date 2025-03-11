<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index(){

        $data = array(
            "title"             => "Dashboard",
            "menuDashboard"     => "active",
        );


        return view('dashboard',$data);
    }
}
