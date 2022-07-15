<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{IncommingGoods, Goods};

class IncommingGoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomming_goods = IncommingGoods::get();

        return view('apps.incomming_goods.index')->with('incomming_goods', $incomming_goods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $goods = goods::get();
        return view('apps.incomming_goods.create')->with('goods', $goods);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $incomming_goods = $request->all();
        IncommingGoods::create($incomming_goods);

        return redirect()->route('incomming_goods');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(incommingGoods $incomming_goods)
    {
        $goods = Goods::get();
        return view('apps.incomming_goods.edit')->with('incomming_goods', $incomming_goods)
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
        $incomming_goods = IncommingGoods::findOrFail($request->id);

        $data = $request->all();
        $incomming_goods->update($data);
        return redirect()->route('incomming_goods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $incommingGoods = IncommingGoods::findOrFail($request->id);
        $incommingGoods->delete();

        return redirect()->back();
    }
}
