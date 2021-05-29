<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        $path = $request->path();
        
        if($path=='admin' && (FacadesSession::get('LoggedUser')==null))
        {
           return redirect('/login');
        }

        if($path=='add-product' && (FacadesSession::get('LoggedUser')==null))
        {
           return redirect('/login');
        }
        
        if($path=='account-table' && (FacadesSession::get('LoggedUser')==null))
        {
           return redirect('/login');
        }

        if($path=='category-table' && (FacadesSession::get('LoggedUser')==null))
        {
           return redirect('/login');
        }

        if($path=='home' && (FacadesSession::get('LoggedUser')==null))
        {
           return redirect('/login');
        }

        if($path=='admin'||$path=='add-product' && (FacadesSession::get('LoggedUser')))
        {
            $user = User::where('email', '=', session('LoggedUser'))->first();
            if($user->role ==0){
                return redirect('/fail-access');
            }
        }

        

        return $next($request);
    }
}
