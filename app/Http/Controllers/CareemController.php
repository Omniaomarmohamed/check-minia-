<?php

namespace App\Http\Controllers;
use App\Models\Careem;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class CareemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|regex:/^.+@.+$/i',
            'phone_number'=>'required|numeric',
            'from'=>'required|string|',
            'to'=>'required|string|',
            'order'=>'required',       
            ]);
    
    
            Careem::create([
            'name' => $request->name, 
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'from' => $request->from,
            'to' => $request->to,
            'order' => $request->order,
            
            ]);
            return redirect(url('/services'));


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
