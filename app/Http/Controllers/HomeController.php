<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
    {
       $status = Auth::user()->status;
        if($status == 'pending'){
        return view('approve');
        }elseif($status == 'rejected'){
         return view('reject');
     }else{
         return view('home');
     }
    }
    
    public function infoSite(){
        if(Auth::user()->status=='accepted'){
        return view('siteInfo');
        }elseif(Auth::user()->status=='pending'){
            return view('approve');
            }else{
            return view('reject');
        }
    }
   
}
