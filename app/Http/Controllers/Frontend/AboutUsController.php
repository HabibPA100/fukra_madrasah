<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function result(){
        return view('frontend.result.result-for-jamat-bivag');
    }
    public function kirat_result(){
        return view('frontend.result.result-for-kirat-bivag');
    }
    public function routine(){
        return view('frontend.class_routine.jamat-bivag-class-routine');
    }
    public function kirat_routine(){
        return view('frontend.class_routine.kirat-bivag-class-routine');
    }
    public function privacy(){
        return view('frontend.privacy');
    }
    public function terms(){
        return view('frontend.terms');
    }
    public function payment(){
        return view('frontend.payment');
    }
}
