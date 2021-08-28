<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
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
        
        return view('user.dashboardUser', compact('products', 'cartCount'));
    }

    //product -details
    public function detail($id){
        $product = Product::find($id);
        $cartCount = Cart::where('user_id', Auth::user()->id)->count();
        return view('user.product.detail', compact('product', 'cartCount'));
    }

    public function add_to_cart(Request $request){

        $cart = new Cart;
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $request->product_id;
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
}
