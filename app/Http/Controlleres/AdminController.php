<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use DB;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function getSignup(){
			return view('admin.adminsignup');
		}
		
		public function postSignup(Request $request){
			$this->validate($request ,[
				'name'=>'required',
				'email' => 'required|email|unique:users',
				'password'=>'required|min:5'
			]);
		
			
			$user=new User([
			  'name'=> $request->input('name'),
			'email'=> $request->input('email'),
			'password'=>  bcrypt($request->input('password'))
			
			]);
			
			

			$user->save();
	
			return view('admin.adminsignin');
		
		}

		public function getSignin(){
			return view('admin.adminsignin');
		}

		public function postSignin(Request $request){
			$this->validate($request ,[
				'email' => 'required|email',
				'password'=>'required|min:5'
			]);

			if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]))
			{
				//return redirect('/user/profile');
				return view('admin.adminprofile');
			}
			return redirect()->back()->with('danger','Invalid email or password');
		}

		 public function getProfile(){
			return view('admin.adminprofile');
		}

}
