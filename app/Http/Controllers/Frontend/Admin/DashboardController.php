<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Models\User;
use App\Models\UserPost;
use App\Models\AdminPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(){
        $posts = UserPost::latest()->get();
        return view('frontend.admin.dashboard', compact('posts'));
    }
    public function user(){
        $users = User::orderBy('id','desc')->get();
        return view('frontend.admin.all-user', compact('users'));
    }
}
