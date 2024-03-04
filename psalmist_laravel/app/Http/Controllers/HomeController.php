<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()

    {

        $categories=Category::all();
        $posts= post::when( request('category_id'),function ($query) {
            $query->where('category_id',request('category_id'));
        })->latest()->get();

        return view('index', compact('categories','posts'));
    }
}
