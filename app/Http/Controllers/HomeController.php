<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function execute(Request $request)
	{
    	$data = $request->all();
		if(isset($data['byname']))
			$users = User::orderBy('name', 'asc')->get();
		elseif(isset($data['byemail']))
			$users = User::orderBy('email', 'asc')->get();
		else
			$users = User::all();
			
		return view('home', array('users' => $users));
	}
}
