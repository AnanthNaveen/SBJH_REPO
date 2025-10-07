<?php

namespace App\Http\Controllers;
use App\Models\Opdpart;
use Illuminate\Http\Request;

class OpdkneeController extends Controller
{
    public function store(Request $request)
{
    
    $json = $request->json()->all();

        $validated = validator($json, [
            'name'       => 'required|string',
            'age'        => 'required|string',
            'regno'      => 'required|string', 
            'sex'        => 'required|string', 
            'type'       => 'required|string',
            'consultant' => 'required|string',
            'allergies'  => 'required|array',
        ])->validate();

        // Remove extra values from JSON before saving
        unset(
            $json['name'], 
            $json['regno'],
            $json['age'], 
            $json['sex'], 
            $json['allergies'], 
            $json['consultant'], 
            $json['type']
        );

        // Check if a record exists for the same regno and today's date
        $existing = Opdpart::where('regno', $validated['regno'])->where('type','knee')
            ->whereDate('created_at', now()->toDateString())
            ->first();

        if ($existing) {
            // Update existing record
            $existing->update([
                'name'       => $validated['name'],
                'age'        => $validated['age'],
                'sex'        => $validated['sex'],
                'allergies'  => $validated['allergies'],
                'type'       => $validated['type'],
                'consultant' => $validated['consultant'],
                'data'       => $json,
            ]);

            $message = 'Data updated successfully';
        } else {
            // Insert new record
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
