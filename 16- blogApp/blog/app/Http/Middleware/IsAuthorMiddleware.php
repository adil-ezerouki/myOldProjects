<?php

namespace App\Http\Middleware;

use App\Models\Author;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAuthorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = $request->route('author');
        $user = Author::find($id);

        if($user) {
            return $next($request);
        }
        return redirect(route('user.profile',['id'=>$id]));
    }
}
