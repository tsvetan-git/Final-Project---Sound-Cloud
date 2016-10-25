<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Validator;
use Redirect;
use Request;
use Session;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use phpDocumentor\Reflection\Types\Array_;

class SearchUserController extends Controller
{
    public function searching()
    {       
        $input = Input::get('user');   
        
        $users=new Array_();
    if ($input !=null) {
        $users = DB::select(("SELECT name FROM users WHERE name LIKE :input OR name LIKE  :input2"),
                array("input"=>$input."%","input2"=>"% ".$input."%"));          
        return view('searchUser',['users' => $users]);
    }else return view('searchUser',['users' => $users]);
            
    }

}