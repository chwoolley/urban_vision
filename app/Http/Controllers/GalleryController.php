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

   		return view('gallery', compact('gallerydata'));
   }

public function show($id)

{

	$singleTatt = Tattoo::find($id);

	return view('pages.gallerysingle', compact('singleTatt'));
}



// public function showLatest(){

// 		$latest = Tatt

// }
}