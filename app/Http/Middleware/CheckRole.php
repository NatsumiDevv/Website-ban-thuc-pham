<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     * 
     * 
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        $user=User::where('id',auth()->id())->first();
        // if ($request->user()->can($role)){
        if($user->role==$role){
            return $next($request);
        }else {
            return redirect()->route('home.index');
        }
    }
}