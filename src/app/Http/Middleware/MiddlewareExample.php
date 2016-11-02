<?php

namespace Yk\LaravelPackageExample\App\Http\Middleware;

use Closure;

class MiddlewareExample
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
        $response = $next($request);
        
        $content = $response->getContent();

        $replace = "<h2>Middleware</h2> Added By The Middleware Example just before the body close :)".'</body>';

        $pos = strrpos($content, '</body>');

        if($pos !== false)
        {
            $response->setContent( substr_replace($content, $replace, $pos, strlen($content)) );
        }

        return $response;

        //return $next($request);
    }
}
