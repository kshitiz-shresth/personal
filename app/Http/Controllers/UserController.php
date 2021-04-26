<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login(Request $request)
    {
        try {
            $email = $request->email;
            $password = $request->password;
            $user = User::where('email', $email)->first();
            if (Hash::check($password, $user->password)) {
                return response([
                    'status' => 200,
                    'type' => 'success',
                    'message' => 'Successfully Validated',
                    'data' => compact('employee')
                ]);
            }
            return response([
                'status' => 401,
                'type' => 'error',
                'message' => 'User not Validated'
            ]);
        } catch (Exception $e) {
            return response([
                'status' => $e->getCode(),
                'type' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function logut()
    {
        return response([
            'status' => 200,
            'type' => 'success',
            'message' => 'Logout Successful',
            'data' => compact('employee')
        ]);
    }
}
