<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tattoo;
use App\Http\Requests;

class pagesController extends Controller
{
    public function home(){


        $latestData = Tattoo::orderBy('created_at','desc')->limit(3)->get();
    	return view('welcome', compact('latestData'));


    }

        public function about(){
        $page_title = 'About';   
    	return view('pages.about', compact('page_title'));
    }

       public function contact(){
        $page_title = 'Contact Us';
    	return view('pages.contact', compact('page_title'));
    }

    //   public function gallery(){
     
    //    return view('gallery');
    // }

    public function broadcastAll(){
        $modeldata = Tattoo::all();
        return $modeldata;
    }

}