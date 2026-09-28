<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * API Login
     */
    public function login(Request $request)
    {
        // 1. Validasi Input
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => false,
                'message' => 'Validasi gagal',
                'errors'  => $validator->errors()
            ], 422);
        }

        // 2. Cari User Berdasarkan Email
        $user = User::with('role')->where('email', $request->email)->first();

        // 3. Cek Ketersediaan User & Password
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status'  => false,
                'message' => 'Email atau password salah'
            ], 401);
        }

        // 4. Buat Token Sanctum
        $token = $user->createToken('auth_token')->plainTextToken;

        // 5. Response JSON Berhasil
        return response()->json([
            'status'  => true,
            'message' => 'Login berhasil',
            'data'    => [
                'user' => [
                    'id'        => $user->id,
                    'name'      => $user->name,
                    'email'     => $user->email,
                    'role'      => [
                        'id'           => $user->role->id ?? null,
                        'name'         => $user->role->name ?? null,
                        'display_name' => $user->role->display_name ?? null,
                    ],
                ],
                'token' => $token,
                'token_type' => 'Bearer'
            ]
        ], 200);
    }

    /**
     * API Logout
     */
    public function logout(Request $request)
    {
        // Hapus token yang sedang digunakan
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Logout berhasil'
        ], 200);
    }

    /**
     * API Get Profile / Authenticated User
     */
    public function me(Request $request)
    {
        $user = $request->user()->load('role');

        return response()->json([
            'status'  => true,
            'message' => 'Data profil pengguna',
            'data'    => $user
        ], 200);
    }
}
