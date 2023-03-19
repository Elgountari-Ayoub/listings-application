<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Relations\HasMany;


class UserController extends Controller
{
    // show the register/create form
    public function register()
    {
        return view('users/register');
    }

    //create new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Has password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create User
        $user = User::create($formFields);

        // login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and loged in!');
    }

    // Logout a user
    public function logout(Request $request){
        auth()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/')->with('message', 'User logout successfuly');
    }

    // show the login/sign-in form
    public function login(){
        return view('users.login');
    }
    // Login/sign-in form
    public function authenticate(Request $request ){

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You\'re logged in');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    

}
