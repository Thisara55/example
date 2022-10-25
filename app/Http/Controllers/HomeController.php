<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function Index(){
        $product=Products::all();
        return view('index',compact('product'));
    }
    public function delete($id){
        $product = Products::find($id);
        $product-> delete();
        return redirect()->back();
    }

    public function update($id){
        $product = products::find($id);
        dd($request->all());
        return view('update',compact('product'));

    }
    public function createView(){
        return view('create');
    }
    public function create(Request $request){
        //dd($request->all());
        $product = new Products();
        $product->title=$request->title ?? null;
        $product->promotion=$request->title ?? null;
        $product->save();
        return redirect()->back();
    }
    public function invoice(){
        $product=Products::all();
        return view('invoice',compact('product'));
    }

}
