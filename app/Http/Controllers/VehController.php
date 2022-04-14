<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\VehController;
use App\Models\VehiclesModel;

class VehController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = VehiclesModel::all();

        return view('/dashboard.vehicle')->with([
            'vehicles' => $vehicles,
        ]);
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
    public function store(Request $Request)
    {
        $Request->validate([
            'v_type'=>'required',
            'v_name'=>'required|max:20',
            'v_model'=>'required|max:20',
            'image'=>'required'
        ]);

        $veh = VehiclesModel::create([
            'v_type' => $Request->input('v_type'),
            'v_name' => $Request->input('v_name'),
            'v_model' => $Request->input('v_model'),
            'image' => $Request->input('image'),
        ]);

        
        return redirect('vehicles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicles = VehiclesModel::all();

        return view('/dashboard.vehicle')->with([
            'vehicles' => $vehicles,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicles = VehicleModel::find($id);

        return view('/dashboard.edit')->with('vehicles',$vehicles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $Request, $id)
    {
        $Request->validate([
            'v_type'=>'required',
            'v_name'=>'required|max:20',
            'v_model'=>'required|max:20',
            'image'=>'required'
        ]);

        $veh = VehiclesModel::where('id',$id)
        ->update([
            'v_type' => $Request->input('v_type'),
            'v_name' => $Request->input('v_name'),
            'v_model' => $Request->input('v_model'),
            'image' => $Request->input('image'),
        ]);



        return redirect('vehicles'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veh = VehicleModel::find($id);
        $veh -> delete();

        return redirect()->route('vehicle'); 
    }
}
