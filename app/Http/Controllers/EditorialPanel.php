<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Library untuk Auth dan Route
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use \Carbon\Carbon as Carbon;

// Library untuk Update DB
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

use App\User;

use Intervention\Image\ImageManagerStatic as ResImage;
use Illuminate\Support\Str;
use File;

use Mail;

use App\Mail\SendMail;

class EditorialPanel extends Controller
{
    //
	public function panelkhusus()
	{
		/*
			This is main account panel page based on status of their account. it will direct into
			difference if their accounts is author or editor. this function will show account 
			panel page if type of user account if editor
		*/
	}
	
	public function profileaccount()
	{
		/*
			Show identity of user profile 
		*/
	}
	
	public function changeprofile(Request $request)
	{
		/*
			Submit change identity of user account including change users photo
		*/
	}
	
	public function indexaccount()
	{
		/*
			This is main panel account page for author
		*/
	}
	
	public function create()
	{
		/*
			This is create author account page. this page can only be access if type of user is editor
		*/
	}
	
	public function store(Request $request)
	{
		
		/*
			Submit new identity of author account and send it confirmation mail via email
		*/
	}

	public function lockaccount($id)
	{
		/*
			Confirmation page if editor want to lock author account
		*/
	}
	
	public function update(Request $request)
	{
		/*
			Change type of author account and send confirmation link to save a new password
		*/
	}
	
	public function deleteaccount($id)
	{
		/*
			Confirmation page if editor want to delete author account
		*/
	}
	
	public function destroy(Request $request)
	{
		/*
			Delete user account and change id of news into editor if author had make news data
		*/
	}
	
	public function forgotpassword()
	{
		/*
			This is forgot password page for author and editor account
		*/
	}
}