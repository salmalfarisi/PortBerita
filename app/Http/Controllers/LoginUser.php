<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Carbon\Carbon as Carbon;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

use Session;

use App\User;

use Mail;

use App\Mail\SendMail;

// Library untuk login
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Traits\ForwardsCalls;
//use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

// Library untuk Auth dan Route
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class LoginUser extends Controller
{
	use AuthenticatesUsers;
	
	use ForwardsCalls;
	
	use ConfirmsPasswords;
	
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
	
	public function login()
	{
		/*
			Direction for user if they want to login in this website
		*/
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
			Login process with validation and authentification from laravel.
			if They finally login into account panel, they will directly into different page
			based on editor and author type account
		*/
    }
	
	public function logoutAdmin(Request $request)
	{
		/*
			Logout for Author and Author if They login into Account Panel
		*/
	}
	
	// Function for change password for all type of account
	public function resetPassword($remember_token)
	{
		/*
			This function will do the process when user click the link 
			which website give to user by email. this process will directly
			into difference page based on what they need such like reset password
			for user or save new password for new user
		*/
	}
	
	public function submitnewpassword(Request $request)
	{
		/*
			Store new password for new user
		*/
	}
	
	public function storeforgotpass(Request $request)
	{
		/*
			Change password, remember_token and status of user account when they
			submit email for reset their password
		*/
	}
}
