<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Topic;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show() {
			$topics = Topic::all();
			return view('auth.login', compact('topics'));
		}

		public function store(Request $request) {
			$credentials = $request->validate([
				'email' => ['required', 'email'],
				'password' => ['required'],
			]);


			if (Auth::attempt($credentials)) {
					$request->session()->regenerate();

					return redirect()->route('admin.main');
			}

			return back()->withErrors([
					'email' => 'The provided credentials do not match our records.',
			])->onlyInput('email');
		}

		public function logout(Request $request) {

			Auth::logout();

			$request->session()->invalidate();
	
			$request->session()->regenerateToken();
	
			return redirect()->route('main');
		}
}
