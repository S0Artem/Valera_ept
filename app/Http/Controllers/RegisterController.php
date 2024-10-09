<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Enums\RoleEnum;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request){
        $validateData = $request->validate([
            'fio' => 'required|string|max:255',
            'login' => 'required|string|unique:users,login|max:255',
            'password' => 'required|string|min:6',
        ]);
    
        User::create([
            'password' => bcrypt($request->password),
            'role' => RoleEnum::USER->value,
        ] + $request->all());
    
        return redirect()->route('login.form')->withInput();
    }
}
