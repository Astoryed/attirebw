<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function stockist()
    {
        return view('stockist');
    }

    public function privacy()
    {
        return view('privacy_policy');
    }

    public function contact()
    {
        return view('contact');
    }

    public function newArrivals()
    {
        $products = Product::all();

        return view('new_arrivals',compact('products'));
    }

    public function returnPolicy()
    {
        return view('return_policy');
    }

    public function ready()
    {
        return view('ready_to_wear');
    }

    public function client()
    {
        return view('client_dairy');
    }


    public function details($id)
    {
        $product = Product::findOrFail($id);

        $items = Product::all();

        return view('product_details', compact('product','items'));
    }


    public function index()
    {
        //
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
