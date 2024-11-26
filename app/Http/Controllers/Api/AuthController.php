<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\User;

class AuthController extends Controller
{


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validator->errors()
            ], 401);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['username'] = $user->username;

        return response()->json([
            'status' => true,
            'message' => 'User Register Successfully',
            'redirect_url' => url('/login')
        ], 200);
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp');
            $success['username'] = $user->username;
            return response()->json([
                'status' => true,
                'message' => 'Login Successful',
                'token' => $success['token'],
                'username' => $success['username'],
                'redirect_url' => url('/') // Redirect URL for the frontend to handle
            ], 200);
            // return response()->json(['success' => $success], 200); 
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
    public function logout(Request $request)
{
    try {
        // Check if the user is authenticated
        if ($request->user()) {
            // Revoke the current access token
            $request->user()->tokens->each(function ($token) {
                $token->delete();  // Delete all tokens
                
            });

            return response()->json([
                'status' => true,
                'message' => 'User logged out successfully',
                'redirect_url' => url('/login'),
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'User is not authenticated',
            ], 401);
        }
    } catch (\Exception $e) {
        // Log the error for debugging
        \Log::error('Logout error: ' . $e->getMessage());

        return response()->json([
            'status' => false,
            'message' => 'Failed to log out. Please try again.',
        ], 500);
    }
}

    
    public function profile(Request $request)
    {
        $user = Auth::user();
        return response()->json([
            'status' => true,
            'message' => 'User logged in successfully',
            'data' => $user
        ], 200);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());
        return response()->json([
            'status' => true,
            'message' => 'User updated successfully',
            'data' => $user
        ], 200);
    }

    public function destroy(Request $request)
    {
        $user = Auth::user();
        $user->delete();
        return response()->json([
            'status' => true,
            'message' => 'User deleted successfully'
        ], 200);
    }
}
