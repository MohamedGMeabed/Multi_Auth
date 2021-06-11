<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class AdminController extends Controller
{


 public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

   public function loginForm(){
       return view('admin.login');
   }


   public function login(AdminLoginRequest $request){

     // dd($request);  
    // $this->validate($request, [
    //     'email'   => 'required|email',
    //     'password' => 'required'
    // ]);

  
      //(Auth::attempt(['email' => $request->email, 'password' => $request->password]))

      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

        return redirect()->route('users');
    }else{

      return redirect()->route('loginForm')->with('error','Email-Address And Password Are Wrong.');
  }
    }

     



   public function index(){
     $users = User::all();

     return view("admin.users",compact('users'));
   }


   public function userEditData($user_id,$status){
      $user = User::findOrFail($user_id);
      $user->status =$status;
      $user->save();
      return redirect()->route('users');
}

}
