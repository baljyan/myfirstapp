<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class EditController extends Controller
{
	public function execute(Request $request)
	{
		if($request->isMethod('post'))
		{
			$data = $request->all();
			$user = User::find($data['edit_id']);
			$user->name = $data['edit_name'];
			$user->email = $data['edit_email'];
			$user->save();
			
			
			if($user)
			{
				return redirect()->route('home')->with('status', 'user data is changed');
			}
		}
	}
}
