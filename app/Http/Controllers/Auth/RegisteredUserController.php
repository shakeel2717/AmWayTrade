<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create($refer = "default")
    {
        if ($refer != "default") {
            $referDetail = User::where('username', $refer)->firstOrFail();
            $refer = $referDetail->username;
        } else {
            $refer = "";
        }
        return view('auth.register', compact("refer"));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'alpha_num', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'refer' => ['nullable', 'string', 'alpha_num', 'max:255', 'exists:users,username'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // checking captcha
        $secret = env('CAPTCHASECRETKEY');
        $response = $request->input('g-recaptcha-response');
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
        $data = file_get_contents($url);
        $row = json_decode($data, true);

        if (!$row['success']) {
            return redirect()->back()->withErrors('Captcha Error, Please try again.');
        }

        if ($validated['refer'] != "") {
            $refer = User::where('username', $validated['refer'])->first();
            if ($refer != "") {
                $refer = $refer->username;
            }
        } else {
            $refer = "default";
        }

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'refer' => $refer,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
