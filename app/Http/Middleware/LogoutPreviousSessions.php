<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;

class LogoutPreviousSessions
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $currentSessionId = Session::getId();

            // Ambil semua sesi pengguna dari database
            $sessions = DB::table('sessions')
                ->where('user_id', $user->id)
                ->where('id', '!=', $currentSessionId)
                ->get();

            // Hapus semua sesi lain
            foreach ($sessions as $session) {
                DB::table('sessions')->where('id', $session->id)->delete();
            }
        }

        return $next($request);
    }
}
