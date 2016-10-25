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

class SortDateController extends Controller
{
	public function sorting()
	{
		$track=DB::Table('track')
		->orderBy('upload_at',' asc')
        ->limit(20)->get();
		return view('sortDate', ['track' => $track]);
	}

}