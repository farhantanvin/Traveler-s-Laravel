<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreaksController extends Controller
{
    public function index(){
		return view('freaks.index');
	}

	public function edit_profile(){
		return view('freaks.edit_profile');
	}

	public function write_blog(){
		return view('freaks.write_blog');
	}

	public function edit_blog(){
		return view('freaks.edit_blog');
	}

	public function delete_blog(){
		return view('freaks.delete_blog');
	}

	public function pin_post(){
		return view('freaks.pin_post');
	}

	public function book_events(){
		return view('freaks.book_events');
	}

	public function history(){
		return view('freaks.history');
	}

	public function messages(){
		return view('freaks.messages');
	}

	public function notifications(){
		return view('freaks.notifications');
	}
}
