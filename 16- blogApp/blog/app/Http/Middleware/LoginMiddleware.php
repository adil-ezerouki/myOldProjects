<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->has('email')) {
            $DBuser = User::where('email','=',$request->email)->first();
            $email = $DBuser->email;
        } else {
            $DBuser = User::where('userName','=',$request->userName)->first();
            $userName = $DBuser->userName;
        }
//        $DBuser = User::where('email','=',$request->email)->orWhere('userName','=',$request->userName)->first();
//        $user = json_decode($DBuser,true);

        if($DBuser == null) {
            return redirect('/user/login');
        } else {

            $password = $DBuser->password;

            if(true) {

                if( isset($email) || isset($userName) && $password == $request->password ) {
                    return $next($request);
                }

            }

        }
        return redirect('/user/login');
    }
}
