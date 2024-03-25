<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
			$topics = Topic::all();
			return view('admin.main', compact('topics'));
		}
}
