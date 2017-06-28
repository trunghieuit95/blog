<?php

namespace App\Http\Controllers;

use App\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        header("Access-Control-Allow-Origin:*");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Methods: *");
        header("Content-Type: application/json; charset=utf-8");
        header("Access-Control-Max-Age:0");
        header('Access-Control-Allow-Headers:  *');
        $data = Hero::select('heroes.id','heroes.name')->get();
        return response()->json($data);
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
        header("Access-Control-Allow-Origin:*");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Methods: *");
        header("Content-Type: application/json; charset=utf-8");
        header("Access-Control-Max-Age:0");
        header('Access-Control-Allow-Headers:  *');
        $data = $request->all();
        Hero::create($data);
        return 'Them thanh cong';
//        $data1 = Hero::select('heroes.id','heroes.name')->get();
//        return response()->json($data1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        header("Access-Control-Allow-Origin:*");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Methods: *");
        header("Content-Type: application/json; charset=utf-8");
        header("Access-Control-Max-Age:0");
        header('Access-Control-Allow-Headers:  *');
        $data = Hero::select('heroes.id','heroes.name')->where('id',$id)->get();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $detail = Hero::find($id);
        $data = $request->all();
        $detail->update($data);
//        return 'Cap nhat thanh cong';
        $data1 = Hero::select('heroes.id','heroes.name')->get();
        return response()->json($data1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        header("Access-Control-Allow-Origin:*");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Methods: *");
        header("Content-Type: application/json; charset=utf-8");
        header('Access-Control-Allow-Headers:  *');
        Hero::destroy($id);
        return 'Xoa thanh cong';
//        $data1 = Hero::select('heroes.id','heroes.name')->get();
//        return response()->json($data1);
    }
}
