<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware('LoginMiddleware')->only('loginAuth');
        $this->middleware('LogoutMiddleware')->except('loginAuth');
//        $this->middleware('IsStillLoggedInMiddleware')->except(['loginAuth', 'logoutAuth']);
    }
    public function loginAuth(Request $request) {

        if($request->has('email')) {
            $user = DB::table('users')->where('email','=',$request->email)->first();
        } else {
            $user = DB::table('users')->where('userName','=',$request->userName)->first();
        }

        $loginToken = Str::random(40);
        $user->loginToken = $loginToken;
        Session::put('user',$user);

        return redirect(route('user.profile', $user->id));
    }

    public function logoutAuth() {

        $user = Session::get('user',[]);

        unset($user->loginToken);

        return redirect(route('user.login'));


    }
}
