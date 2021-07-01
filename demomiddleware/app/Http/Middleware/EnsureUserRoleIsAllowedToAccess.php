<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
class EnsureUserRoleIsAllowedToAccess
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
        $userRole = auth()->user()->role;
        $currentRouteName = Route::currentRouteName();

       // echo 'UserRole: ' .$userRole.'</br>';
       // echo 'currentRouteName: ' .$currentRouteName.'</br>';

        if(in_array($currentRouteName, $this->userAccessRole()[$userRole])){
            return $next($request);
        }else{
            abort(403,'No tienes permiso para acceder a esta función');
        }

    }

    private function userAccessRole(){
        return[
            'user' => [
                'producto.index',
                '',
                'logout',
            ],
            'admin' =>[
                'producto.index',
                'producto',
                'producto.edit',
                'producto.delete',
                'producto.form',
                'producto.update',
                'producto.destroy',
                'producto.create',
                'producto.store',
                '',
                'logout',
            ]
            ];
    }
}
