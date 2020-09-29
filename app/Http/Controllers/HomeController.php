<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Thread;

use App\ThreadComment;

use App\Berita;

use App\BeritaComment;

use App\User;

use App\AllHistory;

use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		/*
			Function for Main Page by Take information from database such as news,
			thread, popular news and recent thread
		*/
    }
	
	public function showArticle($judul)
	{
		/*
			Show Thread data When user click the link by Title of Thread
		*/
	}
	
	public function showNews($judul)
	{
		/*
			Show news data when user click the link by Title or Image of News Data
		*/
	}

	public function showByTrend()
	{
		/*
			Show news data where category news data is "Trend"
		*/
	}
	
	public function showByEconomy()
	{
		/*
			Show news data where category news data is "Economy"
		*/
	}
	
	public function showBySport()
	{
		/*
			Show news data where category news data is "Sport"
		*/
	}
	
	public function showByTechnology()
	{
		/*
			Show news data where category news data is "Technology"
		*/
	}
	
	public function showByInternational()
	{
		/*
			Show news data where category news data is "International"
		*/
	}
	
	public function showByOtomotive()
	{
		/*
			Show news data where category news data is "Otomotive"
		*/
	}
	
	public function showByHealth()
	{
		/*
			Show news data where category news data is "Health"
		*/
	}
	
	public function showByTravel()
	{
		/*
			Show news data where category news data is "Travel"
		*/
	}
	
	public function showByEntertainment()
	{
		/*
			Show news data where category news data is "Entertainment"
		*/
	}

	public function showThread()
	{
		/*
			Show all thread data
		*/
	}
	
	public function searchresult(Request $request)
	{
		/*
			Show news data when user want to search a specific title of thread
		*/
	}
}
