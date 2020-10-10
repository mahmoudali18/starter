<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;


class UserController extends Controller
{
    public function showAdminName(){
        return 'mohamed dsa';
    }

    public function getIndex(){

     /*   $obj= new \stdClass();
        return view('welcome'); */

        $data=['ahmed','bassem'];
        return view('welcome')->with('data','$data');

    }
}
