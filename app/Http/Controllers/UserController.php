<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Scopes\UserActiveScope;

class UserController extends Controller
{
    public function store(Request $request)
    {
        User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['password'])]);
    }

    public function index(){
        echo '<br><br><br>With Global Scope <br><br><br>' ;
        echo User::all() ;
        echo '<br>Without Global Scope <br><br><br>' ;
        echo User::withoutGlobalScope(UserActiveScope::class)->get() ;
         echo '<br><br><br>With Local Scope <br><br><br>' ;
        echo User::EmailVerified()->get() ;
    }
}
