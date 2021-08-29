<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Pipeline;
use App\Actions\Fortify\AttemptToAuthenticate;
use Laravel\Fortify\Actions\EnsureLoginIsNotThrottled;
use Laravel\Fortify\Actions\PrepareAuthenticatedSession;
use App\Actions\Fortify\RedirectIfTwoFactorAuthenticatable;
use App\Http\Responses\LoginResponse;
use Laravel\Fortify\Contracts\LoginViewResponse;
use Laravel\Fortify\Contracts\LogoutResponse;
use Laravel\Fortify\Features;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Throwable;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function dashboard(){
        $products = Product::all();
        $cartCount = Cart::where('user_id', Auth::user()->id)->count();
        $offer = Offer::find(1);
        
        return view('user.dashboardUser', compact('products', 'cartCount','offer'));
    }

    //product -details
    public function detail($id){
        $product = Product::find($id);
        $recom = Product::where('product_price', $product->product_price)
                        ->get();
    


        $cartCount = Cart::where('user_id', Auth::user()->id)->count();
        return view('user.product.detail', compact('product', 'cartCount', 'recom'));
    }

    public function add_to_cart(Request $request){

        $cart = new Cart;
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $request->product_id;
        

        $product = Product::find($request->product_id);
        
        //product inventiry check and pre-order check
        if($product->product_quantity < 1 && $product->pre_order_status == 'Inactive'){
            $cartCount = Cart::where('user_id', Auth::user()->id)->count();
           return view('user.alert.add_cart_alert', compact('cartCount'));
        }
        $cart->save(); 
        return redirect('/dashboard');
    }

    public function cartlist(){
        $cartCount = Cart::where('user_id', Auth::user()->id)->count();

        $products= DB::table('carts')
        ->join('products', 'carts.product_id','=','products.id')
        ->where('carts.user_id', Auth::user()->id)
        ->select('products.*', 'carts.id as cart_id')
        ->get();
        return view('user.cart.cartlist', compact('products', 'cartCount'));
    }

    public function removecart($id){
        Cart::destroy($id);
        return redirect('/cartlist');
    }

    public function ordernow(){
        
        $cartCount = Cart::where('user_id', Auth::user()->id)->count();
        $total= DB::table('carts')
        ->join('products', 'carts.product_id','=','products.id')
        ->where('carts.user_id', Auth::user()->id)
        ->sum('products.product_price');

        // $test= DB::table('carts')
        // ->join('products', 'carts.product_id','=','products.id')
        // ->where('carts.user_id', Auth::user()->id)
        // ->get();
      
        
        return view('user.order.ordernow', compact('total', 'cartCount'));
    }

    public function ordernow_post(Request $request){



        //order data saving
        $order = new Order;
        $order->user_name = Auth::user()->name;
        $order->user_mobile = $request->user_mobile;
        $order->user_division = $request->user_division;
        $order->user_address = $request->user_address;
        $order->order_status = "Pending";
       

       

        //total order amount
        $total= DB::table('carts')
        ->join('products', 'carts.product_id','=','products.id')
        ->where('carts.user_id', Auth::user()->id)
        ->sum('products.product_price');
        
        //delivery
        if($request->user_division == 'Dhaka'){
            $delivery = 60;
        }else{
            $delivery = 100;
        }

        //offer check
        $offer = Offer::find(1);

        //total order product count
        $total_count= DB::table('carts')
        ->join('products', 'carts.product_id','=','products.id')
        ->where('carts.user_id', Auth::user()->id)->get()->count();
        
        //offer active and product count
        if($offer->offer_status == 'Active' && $total_count >= $offer->offer_quantity){
           $discount = $offer->discount;
        }else{
            $discount=0;
        }

        $order->price = $total+$delivery-$discount;
        $order->save();

        //after order remove cart product
        Cart::where('user_id',Auth::user()->id)->delete();
        $cartCount = Cart::where('user_id', Auth::user()->id)->count();
        return view('user.order.ordersubmit', compact('total', 'delivery','cartCount', 'discount'));

    }
}
