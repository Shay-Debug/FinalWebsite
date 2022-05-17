<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\studentinfo;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function googleRedirect(){

    return Socialite::driver('google')->redirect();

    }

    public function googleCallback(){
    $user = Socialite::driver('google')->user();
    $this->createOrUpdate($user,'google');
    return 'Success';
    // dd($user);
    }

    public function createOrUpdate($data, $provider){
        $user = studentinfo::where('email', $data->email)->first();

        if($user){
            $user->update([
                'Provider'=> $provider,
                'Providerid'=> $data->id,
                'Avatar'=> $data->avatar,
            ]);
        }else{
            $user= studentinfo::create([
                'Firstname' => $data->name,
                'Email' => $data->email,
                'Provider'=> $provider,
                'Providerid'=> $data->id,
                'Avatar'=> $data->avatar,
            ]);
        }

        // Auth::login($user);
    }
}
