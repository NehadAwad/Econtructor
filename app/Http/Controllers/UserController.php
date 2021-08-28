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
        //dd( Auth::user()->id);
        $product = Product::find($id);
        //dd($product->id);
        return view('user.product.detail', compact('product'));
    }

    public function add_to_cart(Request $request){

        $cart = new Cart;
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $request->product_id;
        $cart->save(); 
        return redirect('/dashboard');
    }
}
