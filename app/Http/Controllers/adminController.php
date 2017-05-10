<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Tattoo;
use Validator;

use Redirect;


class adminController extends Controller
{
    public function index()
		    {
				$adminData = Tattoo::all();
        $page_title = "Admin";
				return view('admin', compact('adminData', 'page_title'));
			}


public function edit($id)

{

	$editTatt = Tattoo::find($id);
  $page_title = 'Edit Entry: ' . $editTatt->title; 
	return view('pages.edittattoo', compact('editTatt', 'page_title'));
}


// stuff here for editing an existing image and info.


public function edited(Request $req, $id){
       $editTattoo = Tattoo::find($id);


        $imageTitle = $req->title;
        $imageDescription = $req->description;
        $tattType = $req->type;

       //breaking the image out into big file object - easier to access
       $imageUpload = $req->file('image_upload');

       $validator = Validator::make( $req->all(), [
          'image_upload' => 'mimes:jpeg,jpg,png,gif|max:10000'
        ]);

       if ($validator->fails()) {
               session()->flash('upload_fail', 'you fucked up');
       }else{

          if($req->hasFile('image_upload')){

              //Getting the images properties
       $uploadName = $imageUpload->getClientOriginalName();
       $filetype = $imageUpload->getClientOriginalExtension();
       $filemimetype = $imageUpload->getClientMimeType();
       $filesize = $imageUpload->getClientSize();
       $filelocation = $imageUpload->getRealPath();

       //Grab the file name by the balls   
       $fileName = "user_upload_" . time() . '.' . $filetype;


       //Here I am inspecting the information I am getting, not really needed for the upload but helpful for understanding
       $allInfo = [ 'title'=>$imageTitle, 'image_path'=>$fileName, 'description'=>$imageDescription, 'type'=>$tattType];

       // this is specifying where to put the file I am uploading
       $newfileobj = $imageUpload->move ( base_path() . '/public/assets/tattoos', $fileName);

       $editTattoo->image_path = $fileName;
          }
     




      
      $editTattoo->type = $tattType;
      $editTattoo->title = $imageTitle;
      
      $editTattoo->description = $imageDescription;

      $editTattoo->save();

      session()->flash('upload_success', 'Well done motherfucker');
    }

    return Redirect::back()->withErrors($validator);

    }













// stuff here for uploading a new image, taken from upload image controller

	   public function formUpload(){
        $page_title = "Add New Tattoo";
        return view('uploadimage', compact('page_title'));

    } 

	 public function uploaded(Request $req){
       
        $imageTitle = $req->title;
        $imageDescription = $req->description;
        $tattType = $req->type;

       //breaking the image out into big file object - easier to access
       $imageUpload = $req->file('image_upload');

       $validator = Validator::make( $req->all(), $this->rules());

       if ($validator->fails()) {
               session()->flash('upload_fail', 'you fucked up');
       }else{

       //Getting the images properties
       $uploadName = $imageUpload->getClientOriginalName();
       $filetype = $imageUpload->getClientOriginalExtension();
       $filemimetype = $imageUpload->getClientMimeType();
       $filesize = $imageUpload->getClientSize();
       $filelocation = $imageUpload->getRealPath();

       //Grab the file name by the balls   
       $fileName = "user_upload_" . time() . '.' . $filetype;


       //Here I am inspecting the information I am getting, not really needed for the upload but helpful for understanding
       $allInfo = [ 'title'=>$imageTitle, 'image_path'=>$fileName, 'description'=>$imageDescription, 'type'=>$tattType];

       // this is specifying where to put the file I am uploading
       $newfileobj = $imageUpload->move ( base_path() . '/public/assets/tattoos', $fileName);


        // return ($allInfo);
        // return ($newfileobj);
             // return([$uploadName, $filetype, $filemimetype, $filesize, $filelocation, $name, $imageTitle, $imageDescription, $tattType, $imageUpload]);
          

          // $allInfo = $req->all();
       //the actual upload here
      $newTattoo = new Tattoo;
      $newTattoo->type = $tattType;
      $newTattoo->title = $imageTitle;
      $newTattoo->image_path = $fileName;
      $newTattoo->description = $imageDescription;

      $newTattoo->save();

      session()->flash('upload_success', 'Well done motherfucker');
    }

    return Redirect::back()->withErrors($validator);

    }




	//validation rules here
 	public function rules(){

        return['image_upload' => 'required|mimes:jpeg,jpg,png,gif|max:10000'];
    }

 



}