<?php 
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Input;
use Validator;
use Redirect;
use Request;
use Session;

class ApplyController extends Controller {
    
    public function upload() {
        
        // getting all of the post data
        $file = array('file' => Input::file('file'));//
        $trackName = Input::get('name');
       
      $userId=Auth::user()->id;
            // checking file is valid.
            if ($file != null && $trackName !=null) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('file')->getClientOriginalExtension(); // getting image extension
                //$id=Auth::user()->id;
                if($extension =="mp3" ) {
                    $fileName = uniqid().'.'.$extension;// renameing image
                    
                    Input::file('file')->move($destinationPath, $fileName); // uploading file to given path
            
                    DB::insert('insert into track (user_id,track_name,track_path) values(?,?,?)',[$userId,$trackName,$destinationPath.'/'.$fileName]);  
                    return Redirect::to('mytracks');
                }  else {
                    return Redirect::to("/upload");
                    
                }
            }
    }
}   
