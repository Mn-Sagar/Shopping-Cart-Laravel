<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use DB;
use App\User;
use Auth;
class UserController extends Controller
{
    public function getSignup(){
			return view('user.signup');
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
			Auth::login($user);
	
			//return view('shop.index');
			return redirect()->route('user.profile');
		
		}

		public function getSignin(){
			return view('user.signin');
		}

		public function postSignin(Request $request){
			$this->validate($request ,[
				'email' => 'required|email',
				'password'=>'required|min:5'
			]);

			if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){


				//return redirect('/user/profile');
				return view('user.profile');
			}
			return redirect()->back()->with('danger','Invalid email or password');
		}

		 public function getProfile(){
		 	$orders = Auth::user()->orders;
		 	$orders->transform(function($order,$key){
		 		$order->cart = unserialize($order->cart);
		 		return $order;
		 	});

			return view('user.profile',['orders'=>$orders]);
		}

		public function getLogout(){
			Auth::logout();
			return redirect('user.logout');//->route('user.logout');
		}



}

