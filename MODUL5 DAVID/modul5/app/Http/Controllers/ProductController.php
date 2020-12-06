<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    //
    public function show(){
        return view('product', ['product'=>Product::all(),]);
    }

    public function add(){
        return view('TambahProduct');
    }

    public function create(Request $request){

        // dd($request->all());

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
			'img_path' => 'image|mimes:jpeg,png,jpg'
        ]);
        
        if($files = $request->file('img_path')){
        $destinationPath = 'public/images/';
        $file=$request->file('img_path'); // upload path
        $profileImage = rand(1000,20000) . "." . $files->getClientOriginalExtension();
        $pathImg = $file->storeAs('images', $profileImage);
        $files->move($destinationPath, $profileImage);
        }

		$save = Product::create([
			'name' => request('name'),
			'price' => request('price'),
			'description' => request('description'),
			'stock' => request('stock'),
            'img_path' => $pathImg
        ]);
 
		return redirect()->route('produk');
    }

    public function edit(Product $product)
    {   
        // dd($product);
        return view('edit', compact('product'));
    }

    public function update(Request $request, Product $product){

        request()->validate([
            'name' => 'required|Unique:products,name',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
			'img_path' => 'image|mimes:jpeg,png,jpg'
        ]);

        if($files = $request->file('img_path')){
            $destinationPath = 'public/images/';
            $file=$request->file('img_path'); // upload path
            $profileImage = rand(1000,20000) . "." . $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $profileImage);
            $files->move($destinationPath, $profileImage);
            }

        $product->update([
            'name' => request('name'),
			'price' => request('price'),
			'description' => request('description'),
			'stock' => request('stock'),
            'img_path' => $pathImg
        ]);

        return back();
    }

    public function delete(Product $product){
        $product->delete();
        return redirect('produk');
    }
}
