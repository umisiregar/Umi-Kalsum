<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ExitGoods, Goods};

class ExitGoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exit_goods = ExitGoods::get();

        return view('apps.exit_goods.index')->with('exit_goods', $exit_goods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $goods = Goods::get();
        return view('apps.exit_goods.create')->with('goods', $goods);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $exit_goods = $request->all();
        ExitGoods::create($exit_goods);

        return redirect()->route('exit_goods');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ExitGoods $exit_goods)
    {
        $goods = Goods::get();
        return view('apps.exit_goods.edit')->with('exit_goods', $exit_goods)
                                           ->with('goods', $goods);
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
        $exit_goods = ExitGoods::findOrFail($request->id);

        $exit_goods->update($request->all());
        return redirect()->route('exit_goods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $exit_goods = ExitGoods::findOrFail($request->id);
        $exit_goods->delete();

        return redirect()->back();
    }
}
