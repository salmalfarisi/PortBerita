<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Thread;

use App\ThreadComment;

use App\AllHistory;

use Illuminate\Support\Str; 

use File;

use \Carbon\carbon;

use Intervention\Image\ImageManagerStatic as ResImage;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Response;

use Session;

class CRUDThread extends Controller
{
	public function threadData()
	{
		/*
			Show all thread data based on id of user account
		*/
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		/*
			Page for create new thread
		*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeThread(Request $request)
    {
		/*
			Store new thread data into server. including : 
				- Validation
				- Store image into server
				- Store data into database
		*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($judul)
    {
        /*
			Show thread data from user thread panel account
		*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($judul)
    {
        /*
			Edit thread data based on user choose title of thread data
		*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        /*
			Store update thread data into server
		*/
    }

	public function deletethread($judul)
	{
		/*
			Confirmation page if user want to delete thread data
		*/
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        /*
			Delete users thread data and image from server
		*/
    }
	
	public function showArticle($judul)
	{
		/*
			Show thread data page from main page
		*/
	}
	
	public function postcomment(Request $request)
	{
		/*
			Make comment and store it into database
		*/
	}
}
