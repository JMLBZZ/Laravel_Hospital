<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('client.index');
    }
    
    // ############################### LOGIN ############################### //
    public function logindoc(){
        return view('backend.doc.login');
    }
    public function loginadmin(){
        return view('backend.admin.login');
    }
}
