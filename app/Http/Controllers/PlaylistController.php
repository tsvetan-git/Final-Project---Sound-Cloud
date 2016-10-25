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

class PlaylistController extends Controller
{
    public function playlist()
    {
        $userId=Auth::user()->id; 
        $track = DB::select( DB::raw("SELECT * FROM track  track_name WHERE user_id = :userId"), array('userId' => $userId));
        return view('playlist', ['track' => $track]);      
    }
    
}

