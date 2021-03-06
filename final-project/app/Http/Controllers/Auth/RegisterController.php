<?php

namespace App\Http\Controllers\Auth;

use Session;
use App\User;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use\Illuminate\Support\Str;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\ConfirmationAccount;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
     
    protected $redirectTo = '/home';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
         $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'admin' =>0,
            'approve'=>0,
            'token'=>Str::random(40),
        ]);


         $profile = Profile::create([
            'user_id' => $user->id,
            'avatar' => '/images/img-admin/default.jpg',
        ]);

         return $user;
         return $profile;

        
            
        return redirect()->back();


    }

    public function confirmEmail($token)
    {
        User::whereToken($token)->firstOrFail()->hasVerified();
        return redirect('login')->with('status', 'Votre adress mail à été confirmé.Vous allez recevoir un email de confirmation lorsque votre profil est accepté par Admin');;
    }

}
