<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;    // untuk Rule::in()
use Illuminate\Validation\Rules;   // untuk Rules\Password

use App\Mail\RegistrationSuccessMail;
use Illuminate\Support\Facades\Mail;


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
            'subsidiary' => ['required', 'string', Rule::in(['SAVINA', 'SRIN', 'SME'])],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:' . User::class,
                'regex:/^[a-zA-Z0-9._%+-]+@(partner\.)?samsung\.com$/i',
            ],
            'phoneNumber' => ['required', 'regex:/^\+[1-9]\d{7,14}$/'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required'],
        ], [
            'subsidiary.required' => 'Subsidiary is required.',
            'subsidiary.in' => 'Please select a valid subsidiary.',
            'email.unique' => 'This email is already registered',
            'email.regex' => 'The email must use the @samsung.com domain.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'subsidiary' => $request->subsidiary,
            'phone_number' => $request->phoneNumber,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        event(new Registered($user));

        Auth::login($user);
        Mail::send('email.email-confirmation', ['user' => $user], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Registration Successful');
        });



        return redirect(route('registerSuccess', absolute: false));
    }
}
