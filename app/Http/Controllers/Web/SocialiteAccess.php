<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Laravel\Socialite\Facades\Socialite as FacadesSocialite;
use Illuminate\Support\Str;

class SocialiteAccess extends Controller
{
    public function redirectFacebook()
    {
        return FacadesSocialite::driver('facebook')->redirect();
    }

    public function signinFacebook()
    {
        try {

            $user = FacadesSocialite::driver('facebook')->user();
            $userCol = User::where('id_fb', $user->id)
                            ->orWhere('email', $user->email)
                            ->first();

            if($userCol){
                FacadesAuth::login($userCol);
                $user = User::where('email', $user->email)->update(['id_fb' => $user->id]);
                return redirect('/');
            }else{
                $addUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'remember_token' => Str::random(10),
                    'id_fb' => $user->id,
                    'password' => encrypt(Str::random(10))
                ])->assignRole('Comprador');

                FacadesAuth::login($addUser);
                return redirect('/');
            }

        } catch (Exception $exception) {
            session()->flash('info', 'ESTE EMAIL YA SE ENCUENTRA REGISTRADO ');
            return redirect('login');
        }
    }

    public function redirectGoogle()
    {
        return FacadesSocialite::driver('google')->redirect();
    }

    public function signinGoogle()
    {
        try {

            $user = FacadesSocialite::driver('google')->user();

            $userCol = User::where('id_google', $user->id)
                            ->orWhere('email', $user->email)
                            ->first();

            if($userCol){
                FacadesAuth::login($userCol);
                $user = User::where('email', $user->email)->update(['id_google' => $user->id]);

                return redirect('/');
            }else{
                $addUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'remember_token' => Str::random(10),
                    'id_google' => $user->id,
                    'password' => encrypt(Str::random(10))
                ])->assignRole('Comprador');

                FacadesAuth::login($addUser);
                return redirect('/');
            }

        } catch (Exception $exception) {

            session()->flash('info', 'ESTE EMAIL YA SE ENCUENTRA REGISTRADO ');
            return redirect('login');


        }
    }
}
