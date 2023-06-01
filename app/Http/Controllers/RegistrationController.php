<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index');
    }

    public function store(Request $request )
    {
        // $data = $request ->all(); 
        // dd($data);
        // return 'Store';
        $name = $request->input('name');
        $surname = $request->input('surname');
        $gender = $request->input('gender');
        $nationality = $request->input('nationality');
        $organization_name = $request->input('organization_name');
        $job_title = $request->input('job_title');
        $date_of_birth = $request->input('date_of_birth');
        $email = $request->input('email');
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');
        // [
        //     'name' => ['required', 'string', 'max:50'],
        //     'email' => ['required', 'string', 'max:50', 'email', 'unique:users'],
        //     'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],
        // ]);
        //dd($data);
        if (true) {
            return redirect()->back()->withInput();
        }
        return redirect() -> route('participants');
    }
}
