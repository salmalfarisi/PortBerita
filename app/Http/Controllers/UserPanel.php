<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Thread;

use App\AllHistory;

use Illuminate\Support\Str;

use Mail;

use App\Mail\SendMail;

use File;

use \Carbon\carbon;

use Intervention\Image\ImageManagerStatic as ResImage;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Response;

use Session;

class UserPanel extends Controller
{
	public function profileforuser()
	{
		/*
			Show identity of user profile
		*/
	}
	
	public function submitprofile(Request $request)
	{
		/*
			Submit updated identity of user profile. Including : 
				- Validation
				- Change users photo and identity
		*/
	}
	
	public function loginuntukuser(Request $request)
	{
		/*
			Logout process for author and editor
		*/
	}
	
	public function logoutUser(Request $request)
	{
		/*
			Logout process for users
		*/
	}
	
	public function registration()
	{
		/*
			Direction for user who want to make new account in this website
		*/
	}
	
	public function submitregistration(Request $request)
	{
		/*
			Store name and email into this website by validation and send email for confirmation if they want to make new account
		*/
	}
	
	public function forgotpassword()
	{
		/*
			Direction for user who want to reset their password
		*/
	}
}
