<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }

    public function about()
    {
        return view('toko/about');
    }


    // PRAKTIKUM PERTEMUAN 11
    public function admin()
    {
        $products = Product::all();
        return view('toko/admin', compact('products'));
    }


    // PRAKTIKUM 12(CRUD)
    public function create()
    {
        return view('toko/create');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',

        ]);

        Product::create($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product created successfully');
    }


    public function edit(Product $product)
    {
        return view('toko/edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $product ->update($request->all());

        return redirect()->route('produk.admin')->with('success', 'Product update successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('produk.admin')->with('success', 'Product delete successfully');
    }

}