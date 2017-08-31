<?php

namespace Ingaflex\Http\Middleware;

use Closure;

class checkdados
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
        $id = Authorizer::getResourceOwnerId();

        if($this->repository->isLogged($id))
        {
            return ['success'=>false];
        }

        return $next($request);
    }
}
