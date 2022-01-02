<?php

namespace App\Http\Controllers;

use App\Controllers\RegisterController;
use Illuminate\Http\Request;

class AdminController extends Controller {
    
    public function index() {

        return view('admin.admin');
    }
    
    public function edit() {

        return view('admin.edit');
    }

    public function delete() {

        return view('admin.delete');
    }
}
