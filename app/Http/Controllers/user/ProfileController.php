<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255|string',
            'email' => 'required|min:5|max:255|string|email',
            'phone' => 'required|min:5|max:255|string',
            'city' => 'required|min:3|max:255|string',
            'country' => 'required|min:3|max:255|string',
        ]);

        $user = User::find(auth()->user()->id);
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'];
        $user->city = $validated['city'];
        $user->country = $validated['country'];
        $user->save();

        return redirect()->back()->with("success", "Profile Updated Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function changePassword()
    {
        return view("user.profile.password");
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required|min:6|max:255|string',
            'npassword' => 'required|min:6|confirmed|max:255|string',
        ]);

        // checking if this user password is valid
        if (Hash::check($validated['password'], auth()->user()->password)) {
            // updating the user password
            $user = User::find(auth()->user()->id);
            $user->password = bcrypt($validated['npassword']);
            $user->save();
            // redirecting to the profile page
            return redirect()->route('user.profile.index')->with('success', 'Password updated successfully');
        } else {
            // redirecting to the profile page
            return redirect()->route('user.profile.index')->withErrors('Current password is incorrect');
        }
    }
}
