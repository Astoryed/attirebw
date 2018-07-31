<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\PreDec;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

//    Function to increment Number
//    public function addNumber($currentNumber)
//    {
//        $currentNumber++;
//        return $currentNumber;
//    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
//        return $request->all();

        $input = $request->all();

        $lastProduct = Product::orderBy('id', 'desc')->first()->id;
        $lastProduct++;

        $pictureName = 01;

        if($files = $request->file('photo_id'))
        {
            foreach ($files as $file) {
                $name = $pictureName . "." . $file->getClientOriginalExtension();
                $file->move("pictures/item/" . $lastProduct, $name);
                $photo = Photo::create(['file'=> $name]);
                $input['photo_id'] = $photo->id;
                $pictureName++;
            }
        }

        Product::create($input);

        Session::flash('product_created','The Product has been created');

        return redirect()->intended(route('products.create'));

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
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
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
        $product = Product::findOrFail($id);
        $input = $request->all();

        $lastProduct = Product::orderBy('id', 'desc')->first()->id;

//        echo $lastNumber;
//        $lastProductId = "002";

        $pictureName = 01;
        if($files = $request->file('photo_id'))
        {
            foreach ($files as $file) {
//              $name = time() . $file->getClientOriginalName();
                $name = $pictureName . "." . $file->getClientOriginalExtension();
                $file->move("pictures/item/" . $lastProduct, $name);
                $photo = Photo::create(['file'=> $name]);
                $input['photo_id'] = $photo->id;
                $pictureName++;
            }
        }

        $product->update($input);

        Session::flash('product_updated','The Product has been updated');

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        Session::flash('product_deleted','The Product has been deleted');

        return redirect('products');
    }
}
