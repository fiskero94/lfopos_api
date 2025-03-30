<?php

namespace App\Http\Controllers;

use App\Http\Requests\TokenRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TokenController extends Controller
{
    public function create(TokenRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user === null || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $token = $user->createToken('api')->plainTextToken;
        return ['token' => $token];
    }
}
