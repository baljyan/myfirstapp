<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class EditorController extends Controller
{
	public function execute(Request $request)
	{
		if($request->isMethod('get'))
		{
			$id = $request->id;
			
			$user = User::where('id','=',$id)->get();
			return view('editor', array('user' => $user[0]));
		}
	}
}
