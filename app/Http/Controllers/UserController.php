<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    public function login(Request $req)
    {
        $user=User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        { 
         return "username or password did not matched ";
        }
        else{
          $req->session()->put('user',$user);
          return redirect('/');
        }
  }
   function register(Request $req){
     
    $user= new User;
    $user->name=$req->name;
    $user->email=$req->email;
    $user->password=Hash::make($req->password);
    $user->save(); 
    return redirect('/login');
  
  
  }

 
}

