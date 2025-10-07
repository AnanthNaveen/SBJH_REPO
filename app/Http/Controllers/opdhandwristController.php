<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opdpart;

class opdhandwristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
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
        $json = $request->json()->all();
        $validated = validator($json, [
            'name'        => 'required|string',
            'age'         => 'required|string',
            'regno'       => 'required|string',
            'sex'         => 'required|string',
            'type'        => 'required|string',
            'consultant'  => 'required|string',
            'allergies'   => 'required|array',
         ])->validate();
         unset(
            $json['name'], 
            $json['regno'],
            $json['age'], 
            $json['sex'], 
            $json['allergies'], 
            $json['consultant'], 
            $json['type'],
        );

        $existing = Opdpart::where('regno', $validated['regno'])->where('type','hand_wrist')
        ->whereDate('created_at', now()->toDateString())
        ->first();

    if($existing){
        $existing->update([
            'name' => $validated['name'],
            'age'        => $validated['age'],
            'sex'        => $validated['sex'],
            'allergies'  => $validated['allergies'],
            'type'       => $validated['type'],
            'consultant' => $validated['consultant'],
            'data'       => $json,
        ]);
        $message = 'Data Updated successfully';
    } else {
        Opdpart::create([
            'name'       => $validated['name'],
            'age'        => $validated['age'],
            'regno'      => $validated['regno'],
            'sex'        => $validated['sex'],
            'allergies'  => $validated['allergies'],
            'type'       => $validated['type'],
            'consultant' => $validated['consultant'],
            'data'       => $json, 
        ]);

        $message = 'Data saved successfully';
    }
    return response()->json([
        'status'  => 'success',
        'message' => $message
    ]);
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
