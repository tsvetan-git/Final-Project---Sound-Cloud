<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Http\Requests;

class GetController extends Controller
{
    public function viewProfile($result)
    {
        if($result !=null) {
             var_dump($result);
            $q = DB::select(("SELECT  id FROM users WHERE name = :name "),
                    array('name' => $result));
            $q ="/user/".($q[0]->id);
            
        }
        return redirect("$q");       
    }
    
}