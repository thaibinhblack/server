<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\RoomModel;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('type') && $request->has('value'))
        {
            $room = RoomModel::where($request->get('type'), $request->get('value'))->get();
            return response()->json($room, 200);
        }
        
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
        $room = RoomModel::create($request->all());
        return response()->json($room, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        if($request->has('store'))
        {
            $room = RoomModel::join('BOOKING_STORE','BOOKING_ROOM.UUID_STORE','BOOKING_STORE.UUID_STORE')->join('BOOKING_COUNTRY','BOOKING_STORE.UUID_COUNTRY','BOOKING_COUNTRY.UUID_COUNTRY')
            ->join('BOOKING_PROVINCE','BOOKING_COUNTRY.UUID_PROVINCE','BOOKING_PROVINCE.UUID_PROVINCE')->where('UUID_ROOM',$id)->first();
            return response()->json($room, 200);
        }
        
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
