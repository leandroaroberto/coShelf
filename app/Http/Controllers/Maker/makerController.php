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
        /*$products = makerProduct::all();
        return view('maker.inventoryList')->withProducts($products);*/
        $products = makerProduct::all();        
        return view('maker.inventoryList',array('products'=>$products, 'search'=> null));
    }
    
    public function inventoryShow($product_id){
        $products = makerProduct::find($product_id);
        return view('maker.inventoryShow')->withProducts($products);
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
            return redirect()->action('Maker\makerController@inventoryList');
        }
        
    }
    
    public function searchProduct(Request $request){
        //$products = makerProduct::all();
        $products = makerProduct::where('name','LIKE',
                '%'.$request->input('lookfor').'%')->orwhere('category',
                'LIKE','%'.$request->input('lookfor').'%')->get();
        return view('maker.inventoryList', array('products'=>$products,'search'=>$request->input('lookfor')));
        
        
    }
    
}
