<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class TestMiddleware
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
        $test = $request->content;
        if ($test == 'テスト') {
            echo "テストされました";
        } else {
            echo "弾いた";
        }

        $input = "ミドルウェア確認";
        $request->merge(['test' => $input]);

        return $next($request);
    }
}
