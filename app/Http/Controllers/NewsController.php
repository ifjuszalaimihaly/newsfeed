<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
	    $news = News::orderBy('created_at','desc')->simplePaginate(5);
	    return view('pages.index')
		    ->withNews($news);
    }
}
