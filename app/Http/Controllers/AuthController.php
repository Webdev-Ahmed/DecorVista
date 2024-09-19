<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  function index() {
    return view('auth.login');
  }
  
  function create() {
    return view('auth.register');
  }

  function store(Request $req) {
    dd($req);
  }

  function login(Request $req) {
    dd($req);
  }
}
