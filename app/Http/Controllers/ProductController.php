<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
  public function index()
  {
    $product = Product::all();
    return view('product.index', ['products' => $product]);
  }

  public function create()
  {
    if (!Auth::check() || session('user.role') == 'user') {
      return redirect()->to('/login')->with('message', 'You need to login first or be an interior designer');
    }

    $category = Category::all();
    return view('dashboard.add-product', ['categories' =>  $category]);
  }

  public function store(Request $req)
  {
    if (!Auth::check() || session('user.role') == 'user') {
      return json_encode(['message' => 'You need to login first or be an interior designer']);
    }

    $req->validate([
      'name' => ['required', 'min:1'],
      'brand' => ['required', 'min:1'],
      'price' => ['required', 'min:1', 'integer'],
      'discount' => ['min:0', 'max:100'],
      'description' => ['required', 'min:25'],
      'image' => ['required'],
    ]);

    $imageName = null;
    $imagePath = null;

    if ($req->has('image')) {
      $image = $req->file('image');
      $imageName = time() . '.' . $image->getClientOriginalExtension();
      $imagePath = 'uploads/images/';

      if ($image->getSize() > 50000) {
        throw ValidationException::withMessages([
          'image' => 'File size should be under 5mb'
        ]);
      }

      $image->move($imagePath,  $imageName);
    }

    $product = new Product();
    $product->name = $req->name;
    $product->category = $req->category;
    $product->brand = $req->brand;
    $product->price = $req->price;
    $product->discount = $req->discount;
    $product->description = $req->description;
    $product->imgUrl = $imagePath . $imageName;
    $product->save();

    return redirect()->to('/products');
  }

  public function view($id)
  {
    $product = Product::where('id', '=', $id)->first();
    return view('product.view', ['product' => $product]);
  }
}
