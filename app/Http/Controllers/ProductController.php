<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        //
        $data= Product::latest()->orderBy('id', 'DESC')->paginate(15);
   
        return view('dashboard',compact('data'));
    }
    public function addProduct(Request $request){
        $request->validate(
            [
                'name'=> 'required|unique:product|max:255',
                'price'=> 'required',
                'availability'=> 'required',
                'image'=>'required|image|mimes:jpeg,jpg,png',
                'unit'=> 'required',
                'expiredate'=> 'required'
            ]);

            if($request->hasFile('image')){
    		$image = $request->file('image');
    		$name = time().'.'.$image->getClientOriginalExtension();
    		$destination = public_path('/product');
    		$image->move($destination,$name);
            }
            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->unit = $request->unit;
            $product->info = $request->info;
            $product->available = $request->availability;
            $product->image = $name;
            $product->expiredate = $request->expiredate;
            $product->save();
            return response()->json([
                    'status'=>'success',
            ]);
    }
    public function edit($id)
    {
        $prod = Product::find($id);
        return view('dashboard',compact('prod'));
    }

    
public function update(Request $request, $id)
    {
        
         $this->validateUpdate($request,$id);
         $data = $request->all();
         $product = Product::find($id);
         $imageName = $product->image;
          if($request->hasFile('image')){

    		$image = $request->file('image');
    	 	$name = time().'.'.$image->getClientOriginalExtension();
    	 	$destination = public_path('/product');
    	 	$image->move($destination,$name);
             unlink(public_path('product/'.$product->image));
             }
        
         $data['image'] = $name;
        
          $product->update($data);
          return response()->json([
                     'status'=>'success',
             ]);
    }


    public function validateUpdate($request,$id){
        return  $this->validate($request,[
            'name'=> 'required',
                'price'=> 'required',
                'availability'=> 'required',
                
                'unit'=> 'required',
                'expiredate'=> 'required'

       ]);
    }
     public function delete($id)
    {
      
       $product = Product::find($id);
       $prodDelete = $product->delete();
       if($prodDelete){
        unlink(public_path('product/'.$product->image));
return response()->json([
                     'status'=>'success',
             ]);
       }

        
}
}