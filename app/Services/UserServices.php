<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class UserServices
{
    public function store($data)
    {
        \App\Models\User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        // Automatically log the user in
        Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);
    }
}
