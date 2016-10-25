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
use App\Http\Requests;

class SearchSongController extends Controller
{
    public function searching()
    {

        $user=Auth::user()->id;
        $input = Input::get('song');
        $track= array();
        if(!$input== NULL){
        //$track=DB::Table('track')
        //->where('track_name','=',$input)->get();
        $track= DB::select(("SELECT * FROM track WHERE track_name LIKE :input OR track_name LIKE  :input2"),array("input"=>$input."%","input2"=>"% ".$input."%"));
        return view('searchSong', ['track' => $track]);
        }
        return view('searchSong', ['track' => $track]);
    }

}