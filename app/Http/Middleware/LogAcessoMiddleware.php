<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;
use App\LogAcesso;

class LogAcessoMiddleware{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        //request - manipular
        //return $next($request);

        //response - manipular

        dd($request);
        $ip = $request->server->get('REMOTE_ADDR');
        //LogAcesso::create(['log' => 'ip requisitou a rota abcd']); 
        //return Response('Chegamos no Middleware e fizalizamos no próprio Middleware');
    }
}
