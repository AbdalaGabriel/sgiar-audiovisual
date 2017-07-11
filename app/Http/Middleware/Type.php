<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Session;
use Closure;
use Auth;
class Type
{

    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check())
        {
           if($this->auth->user()->type == 11111 || $this->auth->user()->type == 1  )
           {
             // significa que continua con la peticion hhttp original, es decir sigue curso.
             return $next($request);
            }
            else
            {
 
             return redirect()->to('/unabled');
            
            }
        }
        else
        {
            return redirect()->to('/login');
        }

    }
}


