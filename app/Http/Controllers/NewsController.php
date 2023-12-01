<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function addNews(){
        $newsCategory = NewsCategory::latest()->get();
        return view('addNews',compact('newsCategory'));

    }

    public function store(Request $request){

        try{
            $news=News::create([
                'news_category_id'=>$request->news_category_id,
                'title'=>$request->title,
                'excerpt'=>$request->excerpt,
                'description'=>$request->description,
                'user_id'=>auth()->user()->id,
            ]);
            if($request->news_image){
                $news->addMedia($request->news_image)->toMediaCollection('news_image');

            }
            if($news){
                return back()->with('success','News created successfully');
            }

        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());

        }


   }
}