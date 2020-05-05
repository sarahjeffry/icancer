<?php namespace App\Http\Middleware;

use Closure;

class CheckRoleMiddleware
{
    public function handle($request, Closure $next)
    {
//        //User role is admin
//        if ( Auth::check() && Auth::user()->isAdmin() )
//        {
//            return $next($request);
//        }
//
//        //If user role is doctor
//        if(Auth::check() && auth()->user()->Position === 'Consultant')
//        {
//            return view('studentDashboard')
//            or route('routeName');
//        }
//
//        //If user role is nurse
//        if(Auth::check() && auth()->user()->Position ==='Nurse')
//        {
//
//            return view('teacherDashboard')
//            or route('routeName');
//
//        }
//        //default redirect
//        return redirect('home');

    }
}
