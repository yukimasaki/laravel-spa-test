<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\License;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //一覧表示
        return License::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //作成
        License::create($request->all());
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //更新
        License::where('id', $id)->update([
          'product_key' => $request->product_key,
          'product_name' => $request->product_name,
          'expire_date' => $request->expire_date,
          'is_notify' => $request->is_notify,
          'assigned_to' => $request->assigned_to,
          'customer_id' => $request->customer_id,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //削除
        License::where('id', $id)->delete();
    }
}
