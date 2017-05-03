<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tattoo;

use Validator;

use Redirect;

class UploadImageController extends Controller
{

    public function formUpload(){

        return view('uploadimage');
    } 

    // public function rules()
    // {
    //     return ['image_path' => 'required|mimes:jpeg,jpg,png,gif|max:10000'];
    // }

    // public function uploaded(Request $req){
    //     //https://laravel.com/docs/5.2/helpers

    //     // pointer to the big file object - easier access
    //     $uploaded = $req->file('image_path');

    //     // run the whole form request through the Validator
    //     $validator = Validator::make( $req->all(), $this->rules());

    //     if ($validator->fails()) {
 
    //         session()->flash('upload_fail', 'Oh dear, a problem. Do it again, but better!');
    //     } else {
    //         $uploadedName = $uploaded->getClientOriginalName();
    //         // as defined by file name
    //         $filetype = $uploaded->getClientOriginalExtension();
    //         // mime type
    //         $filemimetype = $uploaded->getClientMimeType();
    //         // check ??
    //         $filesize = $uploaded->getClientSize();
    //         // temp location, dev only
    //         $filelocation = $uploaded->getRealPath();

    //         $name = "user_upload_" . time() . '.' . $filetype;
    //         // move returns the new file/new name
    //         $newfileobj = $uploaded->move( base_path() . '/public/assets/tattoos/', $name );

            
    //     }

    //     // see all vars
    //     //dd(get_defined_vars());
    //     return Redirect::back()->withErrors($validator);
    // }
}
