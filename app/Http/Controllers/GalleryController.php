<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tattoo;
class GalleryController extends Controller
{
   public function index()

   {
   		// $modeldata =  Tattoo::all();
   		// return view('gallery',compact('modeldata'));
   		$gallerydata = Tattoo::all();
   		$page_title = "Portfolio";
   		return view('gallery', compact('gallerydata', 'page_title'));
   }

public function show($id)

{

	$singleTatt = Tattoo::find($id);
	$page_title = $singleTatt->title;			

	return view('pages.gallerysingle', compact('singleTatt', 'page_title'));
}



// public function showLatest(){

// 		$latest = Tatt

// }
}