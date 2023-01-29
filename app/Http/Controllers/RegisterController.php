<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class RegisterController extends Controller
{
    //
    public function main() {
        return view('Register', [
            'active' => 'register'
        ]);
    }

    public function create(Request $request) {
        $validation = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|alpha_num|min:8',
            'confirm_password' => 'required|same:password',
            'gender' => 'required',
            'dob' => 'required|after:01/01/1900|before:tomorrow',
            'country' => 'required',
            'role' => 'required'
        ]);

        $validation['password'] = bcrypt($validation['password']);
        // dd($validation);

        User::create($validation);
        return redirect('/login');

    }
}
