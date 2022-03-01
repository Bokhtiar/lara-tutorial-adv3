<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id', 1)->get();
    	$users = User::where('id', 5)->get();
    	$users = User::get();
        // $orderTable = Cache::remember('orderTable', 60, function()
        //     {
        //         return User::all();
        //     });
        //     $users = Cache::get('orderTable');
    	return view('users',compact('users'));
    }
}
