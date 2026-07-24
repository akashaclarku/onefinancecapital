<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        $username = config('app.admin_panel_username');
        $password = config('app.admin_panel_password');

        if (empty($username) || empty($password)) {
            abort(403, 'Admin credentials are not configured.');
        }

        $providedUser = (string) $request->getUser();
        $providedPass = (string) $request->getPassword();

        if ($providedUser !== $username || $providedPass !== $password) {
            return response('Unauthorized', 401, [
                'WWW-Authenticate' => 'Basic realm="Admin Panel"',
            ]);
        }

        return $next($request);
    }
}
