<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesdocController extends Controller
{
    public function indexdoc(){
        return view('backend.doc.index');
    }
    public function profiledoc(){
        return view('backend.doc.profile');
    }
}
