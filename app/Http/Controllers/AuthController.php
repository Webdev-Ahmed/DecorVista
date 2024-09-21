<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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
    //return $req;
     $req->validate([
      'name' => ['required'],
      'username' => ['required', 'unique:users'],
      'email' => ['required', 'unique:users'],
      'password' => ['required', 'confirmed', 'min:6'],
    ]);

    // $user=user::create($validator);
    $user = new User();
    $user->name = $req->name;
    $user->username = $req->username;
    $user->email = $req->email;
    $user->contact = $req->contact;
    $user->role = 'user';
    $user->address = $req->address;
    $user->password = $req->password;
    $user->save();

    // return $user;
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

    return redirect()->to('/');
  }
}
