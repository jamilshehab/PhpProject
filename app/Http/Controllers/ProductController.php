<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller

{
    //products part
    public function index(){
        $data=Product::all();
        return view('pages.product',['products'=>$data]);
        }
        public function detail($id){
            $data=Product::find($id);
            return view('pages.details',['product'=>$data]);
        }
        public function search(Request $req)
    {
          $data=Product::where('name','like','%'.$req->input('query').'%')->get();
          return view('pages.search',['products'=>$data]);
 
    }
    //add to cart part
    public function addToCart(Request $req){
        if($req->session()->has('user')){
       
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')->id;
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
    }
   else{
    return redirect('/login');
   }
  }
//add to cart part which is responsible for cart increment
     public static function cartItem(){
  $userId=Session::get('user')->id;
  return Cart::where('user_id',$userId)->count();
    }
    public function cartList(){
    
 $userId=Session::get('user')->id;
$products=DB::table('cart')->join('products','cart.product_id','=','products.id')->
where('cart.user_id',$userId)->select('products.*','cart.id as cart_id')->get();
return view('pages.cartlist',['products'=>$products]);
   }
    
  
  public function removeCart($id){
       Cart::destroy($id);
       return redirect('cartlist');
  }
  public function orderNow(){
       
   $userId=Session::get('user')->id;
   $total=$products=DB::table('cart')->join('products','cart.product_id','=','products.id')->
    where('cart.user_id',$userId)->sum('products.price');
    return view('pages.ordernow',['total'=>$total]);
  }
  
   
  public function orderPlace(Request $req){
      $userId=Session::get('user')->id;
       $allCart=Cart::where('user_id',$userId)->get();
     
     //while carts are stored in cartlist the user can order
       foreach($allCart as $cart){
        $order=new Order;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->status="pending";
        $order->payment_method=$req->payment;
        $order->payment_status="pending";
        $order->address=$req->address;
        $order->save();
        Cart::where('user_id',$userId)->delete();
       }
         $req->input();
        return redirect('/');
   }

  public function myOrders(){
  $userId=Session::get('user')->id;
    $orders= DB::table('orders')->join('products','orders.product_id','=','products.id')->
     where('orders.user_id',$userId)->get();
      return view('pages.myorders',['orders'=>$orders]);
  

}
}