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

class CRUDPublikasi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
			Show data for permission publication news 
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
        //
		
		/*
			Show Permission Publication Selected Data by Editor with Detail 
		*/
    }

	public function ResultSingleData(Request $request)
	{
		/*
			Change publication status data based on what editor choose.
			This function for Create and Delete status News Data
		*/
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $judul)
    {
        /*
			Change publication status data based on what editor choose.
			This function for Update status News Data
		*/
	}
}
