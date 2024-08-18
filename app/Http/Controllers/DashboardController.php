<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\IslandicBlog;
use App\Models\PolishBlog;



use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard.index');
    }
}
