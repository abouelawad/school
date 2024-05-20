<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'in:student,admin,instructor'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' =>$request->role,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
        # Sign in to the user dashboard page
        $userRole = Auth::user()->role;
        // dd($userRole);

        switch($userRole){
            
            case "student" :
                return redirect()->intended(RouteServiceProvider::STUDENT);
                break;
            case "instructor" :
                return redirect()->intended(RouteServiceProvider::INSTRUCTOR);
                break;
            case "admin" :
                return redirect()->intended(RouteServiceProvider::ADMIN);
                break;
            default:
            return redirect()->intended(RouteServiceProvider::HOME);
        // return redirect(route('login'));
        // return redirect(RouteServiceProvider::HOME);
            }
    }
}
