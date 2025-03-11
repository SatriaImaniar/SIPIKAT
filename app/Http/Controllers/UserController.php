<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = array(
            'title'             => 'Data User',
            'menuAdminUser'     => 'Active',
        );
        return view('admin/user/index',$data);
    }
}
