<?php

namespace App\Http\Controllers;


use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends \Illuminate\Routing\Controller
{
    public function redirect($service){
        return Socialite::driver($service)->redirect();
    }

    public function callback($service){
        return $user = Socialite::with($service)->user();
    }
}
