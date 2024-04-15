<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product; // Assuming your Product model is in the App\Models namespace

class ProductController extends Controller
{
    public function insertProduct()
    {
        // Example using raw query
        DB::statement("insert into products (id, name, price) values (1, 'ASUS', 15000000)");
    }
    public function getAllProducts()
    {
        $prods = DB::table('products')->get();
        
        return view('products.index', ['products' => $prods]);
    }
    public function index()
    {
        // Get all products
        $products = Product::all();
        // Return a view with all products
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        // Get one product by ID
        $product = Product::find($id);
        // Return a view with the product details
        return view('products.show', compact('product'));
    }

    public function store(Request $request)
    {
            // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        // Create and save the new product
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        // Redirect back to the product list or show success message
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        // Delete product
        Product::destroy($id);
        // Redirect back to the product list or show success message
        return redirect()->route('products.index');
    }

    public function create()
    {
        // Return a view containing the form for creating a new product
        return view('products.create');
    }
}
