<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct() {

//        $this->middleware('auth');

    }



    public function show(Request $request) {


//        $user = Auth::user();

        $user = $request->user();

        if(!Auth::check()) {

            $user = User::all();

            Auth::guard('web')->login($user);
//            Auth::loginUsingId(8);


//            dump($user);
//            return redirect('/login');
        }

         if(Auth::viaRemember()) {

             echo 'yes';

         }

        dump(Auth::id());

        return view('Test.welcome');

    }

    /*public function create() {



    }*/
}
