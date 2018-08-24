<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class DeleteController extends Controller
{
	public function execute(Request $request)
	{
		if($request->isMethod('get'))
		{
			$id = $request->id;
			
			$user = User::find($id);
			$user->delete();
			
			if($user)
			{
				return redirect()->route('home')->with('status', 'user accaunt is deleted');
			}
		}
	}
}
