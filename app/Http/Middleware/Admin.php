<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check()){
            return redirect('/login');
        }else{
        $user=Auth::user();
        if($user->isAdmin ==1 || $user->id ==1)
        {
            return $next($request);
        }else{ 
            if($user->user_type=="farmer") 
            {
                return redirect('farmers.index');
            }
        else if($user->user_type=="investor"){
            return redirect('investors.index');
        }
    }
    }
    }
}