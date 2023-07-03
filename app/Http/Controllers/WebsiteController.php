<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmation;
use App\Models\Admins;
use App\Models\Products;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\Cart;
use DateInterval;
use DateTime;

use App\Models\Orders;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    private $setting;

    public function __construct()
    {
        $this->setting = Admins::all()->first();
    }

    function homefunc()
    {
        return view('front_end/home_page')->with('setting', $this->setting);
    }

    function contactfunc()
    {
        return view('front_end/contact')->with('setting', $this->setting);
    }



    function product_details_func($id)
    {
        $product = Products::find($id);
        return view('front_end\product_details')->with('product', $product)->with('setting', $this->setting);
    }

    function nastaleekh_func()
    {
        $products = Products::where('category', 'Nastaleekh')->get();
        return view('front_end/nastaleekh')->with('products', $products)->with('setting', $this->setting);
    }

    function sulus_func()
    {
        $products = Products::where('category', 'Sulus')->get();
        return view('front_end/sulus')->with('products', $products)->with('setting', $this->setting);
    }

    function mix_func()
    {
        $products = Products::where('category', 'Mix')->get();
        return view('front_end/mix')->with('products', $products)->with('setting', $this->setting);
    }


    public function cart()
    {
       $cart = session()->get('cart');
        


        return view('front_end/cart')->with('setting', $this->setting);
    }
    // public function addToCart($id)
    // {
    //     $product = Products::find($id);
    //     if (!$product) 
    //     {
    //         abort(404);
    //     }
    //     $cart = session()->get('cart');
    //     // if cart is empty then this the first product
    //     if (!$cart) {
    //         $cart = [
    //             $id => [
    //                 "description" => $product->description,
    //                 "quantity" => 1,
    //                 "price" => $product->price,
    //                 "image" => $product->image
                    
    //             ]
    //         ];
    //         session()->put('cart', $cart);

    //         return redirect()->back()->with('success', 'Product added to cart successfully!');
    //     }
    //     // if cart not empty then check if this product exist then increment quantity
    //     if (isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //         session()->put('cart', $cart);
    //         return redirect()->back()->with('success', 'Product added to cart successfully!');
    //     }
    //     // if item not exist in cart then add to cart with quantity = 1
    //     $cart[$id] = [
    //         "description" => $product->description,
    //         "quantity" => 1,
    //         "price" => $product->price,
    //         "image" => $product->image
    //     ];
    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Product added to cart successfully!')->with('setting', $this->setting);
    // }

    public function addToCart($id)
    {
        $product = Products::find($id);
        if (!$product) 
        {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $id => [
                    "description" => $product->description,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image,
                    "sku" => $product->sku         
                ]
            ];
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
      
        $cart[$id] = [
            "description" => $product->description,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image,
            "sku" => $product->sku 
        ];
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!')->with('setting', $this->setting);
    }

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    function checkoutfunc()
    {   
        return view('front_end/check_out')->with('setting', $this->setting);
    }

    function orderfunc(Request $request)
    {
        $o = new Orders();
        
        $o->user_full_name = $request->user_full_name;
        $o->user_address = $request->user_address;
        $o->user_phone = $request->user_phone;
        $o->user_email = $request->user_email;
        $o->user_product_sku = $request->user_product_sku;
        $o->user_product_description = $request->user_product_description;
        $o->user_product_quantity = $request->user_product_quantity;
        $o->user_product_price = $request->user_product_price;
        $o->user_product_total_price = $request->user_product_total_price;    
        //$o->user_product_image = $request->user_product_image;    
            
        $o->save();

        //preparation

        $frontData['order_id'] = $o->id;
        $frontData['name'] = $request->user_full_name;
        $frontData['address'] = $request->user_address;
        $frontData['phone'] = $request->user_phone;
        $frontData['email'] = $request->user_email;
        $frontData['sku'] = $request->user_product_sku;
        $frontData['description'] = $request->user_product_description;
        $frontData['quantity'] = $request->user_product_quantity;
        $frontData['price'] = $request->user_product_price;
        $frontData['product_total_price'] = $request->user_product_total_price;
        //$frontData['product_image'] = $request->user_product_image;
        


        //return $this->send_email($request->user_email, $o);

        // Email Code Start
        //$email = new OrderConfirmation();
        Mail::to($request->user_email)->send(new OrderConfirmation($o));
        

        // Email Code End

       session()->forget('cart');
        
        return view('front_end/order')->with('frontData', $frontData)->with('setting', $this->setting);


    }

    // function send_email($email, $o)
    // {
    //     $email = new OrderConfirmation();
    //     $o->user_email;
    //     Mail::to('matiullah.siddiqui1@gmail.com')->send($email);
    
    //     return view('front_end/home_page');

    // }

    function clearcart()
    {
        session()->forget('cart');
        return redirect('/');
    }


    function orderlistfunc()
    {
        //$orders = Orders::all();
        $orders = Orders::all()->sortByDesc("id");
        return view('back_end/order_list')->with('orders', $orders);;
    }

}
