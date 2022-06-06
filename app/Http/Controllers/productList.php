<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productList extends Controller
{
    //
    public function productlist(){
        $products = array();

       $product1 = array("pid"=>1,  "pname"=>"IPHONE 13 PRO MAX", "price"=>"180000Tk");
       $products[] = (object)$product1;
       $product2 = array("pid"=>2,  "pname"=>"SAMSUNG NOTE S22", "price"=>"140000Tk");
       $products[] = (object)$product2;
       $product3 = array("pid"=>3,  "pname"=>"POKO X2", "price"=>"31000Tk");
       $products[] = (object)$product3;
       $product4 = array("pid"=>4,  "pname"=>"SAMSUNG M32", "price"=>"28000Tk");
       $products[] = (object)$product4;
       $product5 = array("pid"=>5,  "pname"=>"OPPO F17 PRO", "price"=>"27000Tk");
       $products[] = (object)$product5;

        return view('productlist')->with('productlist',$products);
    }
    public function productdetails(Request $req){
       
        return view('productdetails')
        ->with('pid',$req->pid)
        ->with('pname',$req->pname)
        ->with('price',$req->price);
    }
    function createproduct(){
       
        return view('createproduct');
    }
}
