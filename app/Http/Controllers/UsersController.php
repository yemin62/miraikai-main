<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    // ユーザー登録画面
    public function create()
    {
        return view('user_create');
    }

    // ユーザー登録処理
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'hourly_wage' => 'required|integer|min:1',
        ]);

        $user = Users::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'hourly_wage' => $validated['hourly_wage'],
        ]);

        $request->session()->regenerate();
        session(['user_id' => $user->id]);

        return redirect('/home');
    }
    // Home画面
   public function index()
{
    $user = Users::latest('id')->first();

    return view('user_home', compact('user'));
}
}
