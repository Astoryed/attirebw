<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Session::has('cart')) {
            return view('cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' =>$cart->totalQty]);


//        return view('cart');
    }


    public function poster(Request $request){

        $data = $request->session()->all();

        echo var_dump($data);
    }


    public function getAddToCart(Request $request, $id)
    {
//        return $request->all();

//        $data = $request->xlarge;
//
//        echo $data;
//        foreach($data as $size => $sizes) {
//
//            switch ($size) {
//                case "1":
//                    echo "X-Large";
//                    break;
//                case "2":
//                    echo "Large";
//                    break;
//                case "3":
//                    echo "Medium";
//                    break;
//                default:
//                    echo "Small";
//            }
//            echo "<br>";
//        }
//
        session()->keep(['saved'=> $id]) ;
        $product = Product::findOrfail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $qty = $request->qty;
        $size = $request->size;
        $cart->add($product, $product->id,$qty,$size);
        $request->session()->put('cart', $cart);
        Session::flash('product_added', 'The Product has been added into the cart');
        return back();
    }



    public function getMore(Request $request,$id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $product = Product::findOrfail($id);
        $size = $request->size;
        if($size=== null)
        {
            $size = "Medium";
        }
        $cart->add($product,$product->id, $qty = '1',$size);
        Session::put('cart', $cart);
        return back();
    }

    public function getDelete($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id,$cart->totalQty,$cart->totalPrice);
        if (count($cart->items) >0)
        {
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->route('cart.index');
    }


    public function deleteCart(){

        Session::forget('cart');

        return redirect()->route('cart.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
