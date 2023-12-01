<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCategoryRequest;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsCategoryController extends Controller
{
  

    public function store(NewsCategoryRequest $request){

        try{
           $newsCategory=DB::transaction(function()use($request){
                $newsCategory = NewsCategory::create([
                    'title' => $request->newsCategory

                ]);
                return $newsCategory;
           });
            if($newsCategory){
                return back()->with('success','News Category created successfully!');
            }

        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());

        }

    }
}
