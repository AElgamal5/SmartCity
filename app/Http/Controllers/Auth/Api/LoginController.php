<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed|min:0'

        ]);
        //confirmed -> use to make user enter the password 2 times (password,password_confirmation)
        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);
        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        //201 -> created
        return response($response, 201);
    }

    public function login(Request $request)
    {
        //dd(auth('sanctum')->user()->id);


        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'

        ]);
        $user = User::where('email', $fields['email'])->first();
        $logged = DB::select('SELECT name from personal_access_tokens where tokenable_type=? and tokenable_id=? ', ['App\Models\User', $user->id]);
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'massage' => 'Wrong Inputs'
            ], 401);
            //401 -> unauth
        }
        if (!empty($logged)) {
            return 'You Are Already Logged In';
        }
        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        //201 -> created
        return response($response, 201);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'massage' => 'logged out'
        ];
    }
}
