<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{

    public function getEmployee(Request $request)
    {
        $passportNumber = $request->passportNumber;
        $employee = Employee::where('passport_number', $passportNumber)->first();
        if ($employee) {
            return response([
                'status' => 200,
                'type' => 'success',
                'message' => 'Data Found',
                'data' => compact('employee')
            ]);
        } else {
            return response([
                'status' => 401,
                'message' => 'No Data Found'
            ]);
        }
    }

    public function setFingerPrint(Request $request)
    {
        try{
            $passportNumber = $request->passportNumber;
            $employee = Employee::where('passport_number', $passportNumber)->first();
            if ($fingerprint1 = $request->file('fingerprint1')) {
                $name = Str::random(20) . '.' . $fingerprint1->getClientOriginalExtension();
                $fingerprint1->move('finger-prints/' . $employee->id . '/', $name);
                $employee->fingerprint1 = "https://kshitizstha.com.np/finger-prints/" . $employee->id . '/' . $name;
            }
    
            if ($fingerprint2 = $request->file('fingerprint2')) {
                $name = Str::random(20) . '.' . $fingerprint2->getClientOriginalExtension();
                $fingerprint2->move('finger-prints/' . $employee->id . '/', $name);
                $employee->fingerprint2 = "https://kshitizstha.com.np/finger-prints/" . $employee->id . '/' . $name;
            }
    
            if ($fingerprint3 = $request->file('fingerprint3')) {
                $name = Str::random(20) . '.' . $fingerprint3->getClientOriginalExtension();
                $fingerprint3->move('finger-prints/' . $employee->id . '/', $name);
                $employee->fingerprint3 = "https://kshitizstha.com.np/finger-prints/" . $employee->id . '/' . $name;
            }
            $employee->update();
            return response([
                'status' => 200,
                'type' => 'success',
                'message' => 'Fingerprint Updated Successfully.',
                'data' => compact('employee')
            ]);
        }
        catch(Exception $e){
            return response([
                'status' => $e->getCode(),
                'type' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }
}
