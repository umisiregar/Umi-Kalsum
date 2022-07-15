<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Goods, Category};

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = Goods::get();

        return view('apps.goods.index')->with('goods', $goods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        return view('apps.goods.create')->with('category', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        Goods::create($request->all());

        return redirect()->route('goods');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(goods $goods)
    {
        $category = Category::get();
        return view('apps.goods.edit')->with('goods', $goods)
                                      ->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $goods = Goods::findOrFail($request->id);

        $goods->update($request->all());
        return redirect()->route('goods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $goods = Goods::findOrFail($request->id);
        $goods->delete();

        return redirect()->back();
    }
}
