<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Event;
use App\Models\Statistic;
use App\Models\Category;

class AdminController extends Controller
{
    public function dashboard()
    {
        $posts=Post::all();
        $events=Event::all();
        $ststistics=Statistic::all();
        $categories=Category::all();
        return view('admin.dashboard.dashboard', compact('posts','events','ststistics','categories'));
    }
}
