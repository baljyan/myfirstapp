<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	
	/**
     * Show all users from DB.
     */
	public function allusers()
    {
        $users = DB::table('users')->get();
		return view('home', compact('users'));
    }
	
	public function show()
	{
		var_dump($_POST['inp_name']);
	}
}
