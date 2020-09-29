<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Berita;

use App\BeritaComment;

use App\AllHistory;

use Illuminate\Support\Str; 

use File;

use \Carbon\carbon;

use Intervention\Image\ImageManagerStatic as ResImage;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Response;

use Session;

class CRUDBerita extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		/*
			Show all news data where status of news data is published
		*/
    }
	
	public function indexbyid()
	{
		/*
			Show all news data where id is author itself
		*/
	}
	
	public function indexonprocess()
	{
		/*
			Show all news data where id is author itself and status of data is waiting decision from editor
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
			Direction for Author and Editor to create a news data
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
			Store all news data that created by Author and Editor. this include : 
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
			Give direction for Author and Editor based on what the news data they choose
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
			Give direction for Author and Editor to edit news data based on what the news data they choose
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
			Update news data. Including : 
				- Validation
				- Store Image into server if Exist
				- Store Data into database based on status of news data
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
			Delete news data from server based on status of news data
		*/
    }
	
	public function deletedata($judul)
	{
		/*
			Confirmation page if author want to delete the news data
		*/
	}
	
	public function approvalnews($judul)
	{
		/*
			Confirmation page if author want to make permission publication of the news data
		*/
	}
	
	public function submitapprovalnews(Request $request)
	{
		/*
			Change status news data for permission publication.
		*/
	}
	
	public function postcomment(Request $request)
	{
		/*
			Do comment based on news data by ID of author. if they want to make comment 
			in another id, they must login into main page first
		*/
	}
}
