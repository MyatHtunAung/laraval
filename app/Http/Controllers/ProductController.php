<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product as Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$students = DB::select('select * from students');
        //return view('student.index',['students'=>$students]);
       // $students = Student::all();
        $products = Product::where('status', 1)
            ->orderBy('name', 'desc')
            ->take(10)
            ->get();
        return view('product.index')
            ->with('product_objects', $products);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //die('student store');
        $name = $request->input('name');
        $brand=$request->input('brand');
        $remark=$request->input('remark');
        $price=$request->input('price');
        $product = new Product;
        $product->name = $name;
        $product->brand = $brand;
        $product->remark = $remark;
        $product->price = $price;
        $product->save();
        return redirect()->route('product.index');

       // DB::insert('insert into products (name) values(?,?,?,?)', [$name,$brand,$remark,$price]);
        //echo "Record inserted successfully.<br/>";
        //echo '<a href="/product/create">Click Here</a> to go back.';
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
