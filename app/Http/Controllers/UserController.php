<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index () 
    {
        $data = array();
        $data['users'] = User::simplePaginate();
        return view('user.index', $data);
    }
}
