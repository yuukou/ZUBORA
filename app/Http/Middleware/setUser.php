<?php

namespace App\Http\Middleware;

use App\User;
use Illuminate\Auth\AuthManager;
use Illuminate\View\Factory;

class setUser
{
    public function __construct(Factory $viewFactory, AuthManager $authManager)
    {
        $this->viewFactory = $viewFactory;
        $this->authManager = $authManager;
    }

    public function handle($request, \Closure $next)
    {
        $user = $request->user();
        if ($user && $user instanceof User) {
            $this->viewFactory->share('user', $user);
        }
        return $next($request);
    }
}