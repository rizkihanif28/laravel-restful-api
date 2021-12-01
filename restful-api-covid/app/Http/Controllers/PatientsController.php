<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Status;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patient::all();

        $response = [
            'message' => 'Get All Resource',
            'data' => $patients
        ];
        return response()->json($response, 200);
    }

    public function store(Request $request)
    {

        $status = Status::create([
            'status' => $request->status,
        ]);

        $patients =  Patient::create([
            'status_id' => $status->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'in_date_at' => $request->in_date_at,
            'out_date_at' => $request->out_date_at
        ]);
        $response = [
            'message' => 'Patient is Created',
            'data' => $patients
        ];

        return response()->json($response, 201);
    }
}
