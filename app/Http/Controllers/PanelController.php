<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class PanelController extends Controller
{
  public function index()
  {
    return view('dashboard.index');
  }

  public function users()
  {
    $users = User::all();
    return view('dashboard.users', ['users' => $users]);
  }

  public function products()
  {
    $products = Product::all();
    return view('dashboard.products', ['products' => $products]);
  }
}
