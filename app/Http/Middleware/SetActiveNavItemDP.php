<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetActiveNavItemDP
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
        if ($request->routeIs('doctpanel.indexopd') || $request->routeIs('reception.reglist') || $request->routeIs('opd.regno'))
        {
            session()->put('activeNav', 'doctpanel.indexopd'); // unify both under OPD
        }
        elseif ($request->routeIs('ipd.index'))
        {
            session()->put('activeNav', 'ipd.index');
        }
        else
        {
            session()->forget('activeNav');
        }
        return $next($request);
    }
}

?>
