<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Routing\Controllers\HasMiddleware;

class AdminController extends Controller
{
    public static function middleware(): array{
        return ['auth'];
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
