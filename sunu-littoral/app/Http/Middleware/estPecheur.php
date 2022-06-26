<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class estPecheur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){ //s'il c authentifier
            if(Auth::user()->role == 'Pecheur'){ //et que c'est un administrateur
                return $next($request);
            }
            else{
                if(Auth::user()->role == 'Scientifique'){
                    return redirect('/scientifique')->with('message','acces interdit,tu n\'est pas un pecheur');
                }
                elseif(Auth::user()->role == 'Admin') {
                    return redirect('/admin')->with('message','acces interdit,tu n\'est pas un pecheur');
                }
                elseif(Auth::user()->role == 'SecteurEtat') {
                    return redirect('/secteuretat')->with('message','acces interdit,tu n\'est pas un pecheur');
                }
                elseif(Auth::user()->role == 'SecteurPrive') {
                    return redirect('/secteurprive')->with('message','acces interdit,tu n\'est pas un pecheur');
                }
                elseif(Auth::user()->role == 'ONG') {
                    return redirect('/ong')->with('message','acces interdit,tu n\'est pas un pecheur');
                }
                elseif(Auth::user()->role == 'Pop_Env') {
                    return redirect('/populationenvironnant')->with('message','acces interdit,tu n\'est pas un pecheur');
                }
            }
        }
        else{
            return redirect('/login')->with('message','connectez-vous pour acceder a ce lien');
        }

    }
}
