<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\blog;

class BlogsController extends Controller
{
    public function index(){

    	$blogCount=blog::all()
    			   ->count();

    	$blog=blog::all();


		return view('blogs.index')->with('count',$blogCount)
								  ->with('blog',$blog);
	}

	public function blog_details($id){


		$blog=blog::where('id',$id)
					->get();

		return view('blogs.blog_details')->with('blog',$blog);

	}
}
