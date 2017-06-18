<?php

namespace coshelf\Http\Controllers\Maker;

use Illuminate\Http\Request;
use coshelf\Http\Controllers\Controller;
use coshelf\makerProduct;


class makerController extends Controller
{
    //
    public function index(){
        return redirect()->action('HomeController@index');
    }
    
    public function inventoryList(){
        return view('maker.inventoryList');
    }
    
    public function addProduct(){
        //show the form
        return view('maker.newProduct');                
    }
    
    public function storeProduct(Request $request){
        
        $this->validate($request, [
            'name'=>'required|min:2',
            'category'=>'required|exists:makerProductCategories',
            'price'=>'required|Numeric',
            
        ]);
        
        $product = new makerProduct();
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->requirements = $request->input('requirements');
        
        if($product->save())
        {
            echo "ok";
        }
        
    }
}
