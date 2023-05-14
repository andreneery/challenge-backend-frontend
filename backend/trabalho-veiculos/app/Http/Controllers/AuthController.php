<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //create a function to register a user
    public function register(Request $request)
    {
        //validate the incoming request
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        //create the user
        $user = new \App\Models\User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password)
        ]);

        //save the user
        $user->save();

        //return a response
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    //create a function to login a user
    public function login(Request $request)
    {
        // Validate the incoming request
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to login the user
        $credentials = $request->only(['email', 'password']);
        if (!$token = auth()->attempt($credentials)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        // Retrieve the authenticated user
        $user = auth()->user();

        // Return the response with the token and user information
        return response()->json([
            'token' => $token,
            'user' => $user
        ], 200);
    }

    //create a function to logout a user
    public function logout()
    {
        //logout the user
        \Auth::logout();

        //return a response
        return response()->json([
            'message' => 'Successfully logged out'
        ], 200);
    }

    //create a function to refresh a token
    public function refresh()
    {
        //refresh the token
        if (!$token = \Auth::refresh()) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        //return a response
        return response()->json([
            'token' => $token
        ], 200);
    }

    //create a function to get the authenticated user
    public function user()
    {
        //get the authenticated user
        $user = \Auth::user();

        //return a response
        return response()->json([
            'user' => $user
        ], 200);
    }
}
