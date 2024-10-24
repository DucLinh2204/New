<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PageController extends Controller
{
    public function home(){
         if (Auth::id()) {
            $role = Auth()->user()->role;
            if ($role == 1) {
                return view('admin.adminhome');
            }else if($role == 0) {
                return view('desktop.template.home');
            }else{
                return redirect()->back();
            }
        }
        return view('desktop.template.home');
    }
}
