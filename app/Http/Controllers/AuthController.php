<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

use function PHPUnit\Framework\returnSelf;

class AuthController extends Controller
{
  function index()
  {
    return view('auth.login');
  }

  function create()
  {
    return view('auth.register');
  }

  function store(Request $req)
  {
    $req->validate([
      'firstName' => ['required'],
      'username' => ['required', 'unique:users'],
      'email' => ['required', 'unique:users'],
      'password' => ['required', 'confirmed', 'min:6'],
    ]);

    $user = new User();
    $user->firstName = $req->firstName;
    $user->lastName = $req->lastName;
    $user->username = $req->username;
    $user->email = $req->email;
    $user->role = 'user';
    $user->password = $req->password;
    $user->save();

    return redirect()->to('/login');
  }

  function login(Request $req)
  {
    $validator = $req->validate([
      'username' => ['required'],
      'password' => ['required', 'min:8'],
    ]);

    if (!Auth::attempt($validator)) {
      throw ValidationException::withMessages([
        'username' => 'Credentials wrong!'
      ]);
    }

    $user = User::where('username', '=', $req->username)->first();

    session_start();
    session(['user' => [
      'id' => $user->id,
      'firstName' => $user->firstName,
      'lastName' => $user->lastName,
      'username' => $user->username,
      'email' => $user->email,
      'role' => $user->role,
      'password' => $user->password,
    ]]);

    return redirect()->to('/');
  }

  function logout()
  {
    Auth::logout();
    session_reset();
    return redirect()->to('/');
  }
}
