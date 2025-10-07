<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    function index(){
        return view('admin.reviews');
    }

    function create(){
        return view('admin.addReview');
    }

    function edit($id){
        $review = Review::find($id);       
        
        if ($review) {           
            return view('admin.editReview')->with('review', $review);
        }
        
        return redirect()->back();
    }
}
