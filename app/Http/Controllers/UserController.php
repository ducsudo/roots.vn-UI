<?php

namespace App\Http\Controllers;

use App\Events\LoginEvent;
use App\Events\UserRegistered;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    // Get
   
    public function showLogin(Request $request) {
        return view('pages.login');
    }

    public function showSignup(Request $request) {
        return view('pages.signup');
    }

    


    // Post
    public function login(Request $request) {
        // Log::info('You is sent login info!', [
        //     'datas'=> $request->all(),
        // ]);
        $user = User::where('email', $request->input('email'))->first();
        // Log::info('You is sent login info!', [
        //     'user'=> $user,
        // ]);


        Log::info('=========================');
        Log::info('Login Event dispatch');
        
        // Fire the event
        event(new LoginEvent($user));

        if(isset($user) && Hash::check(
            $request->input('password'),
             $user->password
            )
        ) {
            toastr()->success('Your is login successfully!');
            
            return redirect('/');
        }
        
        toastr()->error('Your is login fail!');
        
        return redirect()->back();
    }

    public function signup(UserRequest $request)
    {
        
        Log::info('Sent signup info!');
        $datas = [
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ];

        // Validate and create user
        $user = User::create($datas);

        // Fire the event
        event(new UserRegistered($user));

        toastr()->success('Your is login successfully!');

        // Return response
        return redirect("/");
    }

}
