<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function addNews(){
        $newsCategory = NewsCategory::latest()->get();
        return view('addNews',compact('newsCategory'));

    }
}