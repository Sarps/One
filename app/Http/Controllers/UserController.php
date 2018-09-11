<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function store(Request $request){
    	
    	 $user = User::create($request->all());
    	 Session::flash('add','You have been added');

    	 if($request->affiliate == 'regular'){
    	 	return redirect()->route('regular');
    	 }else{
    	 	return redirect()->route('parallel');
    	 }
    	
    }// end of store

    public function regular(){
    	$regular = User::where('affiliate','=','regular')->get();
    	$total_reg= User::where('affiliate','=','regular')->count();
    	return view('regular',compact('regular','total_reg'));
    }

 	public function parallel(){
    	$parallel = User::where('affiliate','=','parallel')->get();
    	$total_para = User::where('affiliate','=','parallel')->count();
    	return view('parallel',compact('parallel','total_para'));
    }

}
