<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::table('products')->where('id',$id)->delete();
   
        return redirect('/welcomeadmin');
    }
    

    public function index()
    {
        $products = products::all();
    
        return view('welcome')->with('products',$products);
    }

    public function create(Request $request)
    {
        $product = new Products;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
           
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('css/image',$filename);
            $product->image = $filename;
        }else{
            return $request;
            $product->image = '';
        }

        $product->save();
        return redirect('/welcomeadmin');
    }

    public function formulaire(){
        return view('/insert');
    }

public function editData($productId){
        $data = Products::find($productId);
        if(count (array($data))>0){
            return view('edit',['data' =>$data]);
        }
        else
        {
            $product = Products::all();   
            return view('welcomeadmin',['product'=>$product,]);
        }
    }

public function updateData(Request $req)
   {
   $product = Products::find($req->input('productId'));
   $product->name = $req->input('name');
   $product->description = $req->input('description');
   $product->price = $req->input('price');
   $product->category = $req->input('category');

   if($req->hasfile('image')){
    $file = $req->file('image');
    $extension = $file->getClientOriginalExtension();
    $filename = time() .'.'. $extension;
    $file->move('css/image',$filename);
    $product->image = $filename;
}
    $product->save();
    return redirect('/welcomeadmin');
  }
    

  public function viewdata($productId){
    $products = products::all();
    
        return view('shop')->with('products',$products);
    
}

public function viewProduct($productId){
    $product = Products::find($productId);
        if(count (array($product))>0){
            return view('view',['product' =>$product]);
        }
}
 
}
