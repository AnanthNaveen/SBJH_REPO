<?php

namespace App\Http\Controllers;

use App\Models\Opdpart;
use Illuminate\Http\Request;

class OpdShoulderElbowController extends Controller
{
    public function store(Request $request){
        dd("working");
        
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

        $existing = Opdpart::where('regno', $validated['regno'])->where('type','spinal_deformity')
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
    
}
