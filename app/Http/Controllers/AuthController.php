<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {   
        $request->validate([
            'photo_profile' => ['required'],
            'names' => ['required', 'string', 'max:35'],
            'first_surname' => ['required', 'string', 'max:35'],
            'second_surname' => ['required', 'string', 'max:35'],
            'email' => ['required', 'string', 'email', 'max:30'],
            'birthday' => ['required', 'date'],
            'phone_number' =>['required', 'string', 'max:10'],
            'control_number' => ['required', 'string', 'max:9'],
            'career' => ['required', ['in:isc, ii, ige']],
            'admission_day' => ['required', 'date'],
            'school_origin' => ['required', 'string'],
            'user' => ['required', 'string', 'max:35'],
            'password' => ['required', Rules\Password::defaults()],
        ]);
        $user = new User();
        $route_image = 'imagenes-perfil/control-number' . $request->input('control_number') . '/' . $request->input('control_number') . '.' . $request->file('photo_profile')->extension();
        $this->store($request);
        $user->photo_profile = $route_image;
        $user->names = $request->post('names');
        $user->first_surname = $request->post('first_surname');
        $user->second_surname = $request->post('second_surname');
        $user->email = $request->post('email');
        $user->birthday = $request->post('birthday');
        $user->phone_number = $request->post('phone_number');
        $user->control_number = $request->post('control_number');
        $user->career = $request->post('career');
        $user->admission_day = $request->post('admission_day');
        $user->school_origin = $request->post('school_origin');
        $user->user = $request->post('user');
        $user->password = $request->post('password');
        $user->save();
        return redirect('signin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image_profile = $request->file('photo_profile');
        $image_profile->storeAs('/control-number' . $request->input('control_number') . '/', $request->input('control_number') . '.' . $image_profile->extension());
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
