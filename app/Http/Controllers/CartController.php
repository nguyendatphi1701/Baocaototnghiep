<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Cart;
use Illuminate\Support\Facades\Redirect;
class CartController extends Controller
{
    public function AddCart($product_id){
      $product = DB::table('tbl_product')->where('product_id',$product_id)->first();
      if($product != null){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->AddCart($product, $product_id);
        dd($newCart);
      }
    }
}
