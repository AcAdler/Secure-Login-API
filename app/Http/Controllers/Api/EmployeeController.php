<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'You are authorized to view the employee list!'
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'message' => 'Employee created successfully'
        ], 201);
    }

    public function show($id)
    {
        return response()->json([
            'message' => "Viewing details for employee ID {$id}"
        ]);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'message' => "Employee ID {$id} updated successfully"
        ]);
    }

    public function destroy($id)
    {
        return response()->json([
            'message' => "Employee ID {$id} deleted successfully"
        ]);
    }
}