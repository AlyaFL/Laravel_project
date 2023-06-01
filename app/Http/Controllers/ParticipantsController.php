<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    public function index()
    {
        $participant = (object)[
            'name' => 'name',
            'surname' => 'sur',
            'sex' => 'sex',
            'nationality' => 'nat',
            'organization_name' => 'org',
            'job' => 'job',
            'date_of_birth' => 'dat',
            'email' => 'ema',
            'password' => 'pas',
            'password_confirmation' => 'pas',
        ];

        $participants = array_fill(0, 10, $participant);
        
        return view('participants.index', compact('participants'));
    }
}
