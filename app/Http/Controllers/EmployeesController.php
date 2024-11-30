<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function showEmployeeForm()
       {       
        return view('employee.create');
       }
    //
    public function create(Request $request)
    {
        $validateData=$request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'phone'=>'string|required',
            'hired_date'=>'required',
            'job_title'=>'required|string',
            'status'=>'required|in:active,inactive',
            //              
        ]);
        
        // dd($request->all());

      $data=Employees::create($validateData);
      //return view('index');
    //   return response()->json([
    //   'message'=>'employee created successfully',
    //   'data'=>$data
    //   ]);

    return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }


    public function edit($id)
{
    // Find the employee by ID and return the edit view with the data
    $employee = Employees::findOrFail($id);
    return view('employee.edit', compact('employee'));
}


    // public function update(Request $request, $id)
    // {
    //     // Validate the incoming data
    //     $validated = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:employees,email,' . $id,
    //         'phone_number' => 'required|string',
    //         'position' => 'required|string|max:255',
    //     ]);

    //     // Find the employee by ID
    //     $employee = Employees::findOrFail($id);

    //     // Update the employee record with the validated data
    //     $employee->update($validated);

    //     // Return a response
    //     return response()->json(['message' => 'Employee updated successfully', 'employee' => $employee], 200);
    // }


    //for update
    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|unique:employees,email,' . $id, //coma after the email, email is unique, so the coma will make it is ignored
            'phone'=>'required|string',
            'hired_date'=>'required',
            'job_title'=>'required|string',
            'status'=>'required|string',

        ]);

        
        $employees=Employees::findOrFail($id);
        $employees->update($validated);

       return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
      // return view('employee.index', compact('employees'));
    //   return response()->json([
    //     'message'=>'employee created successfully',
    //     'data'=>$employees
    //     ]);
    }

    // public function getUpdateForm()
    // {
    //     return view('employee.update');
    // }

    public function getEmployees(Request $request)
    {
      $employees=Employees::all();
    //   dd($employees);
      return view('employee.index', compact('employees'));
    }


    public function destroy($id)
    {
        // Find the employee by ID
        $employee = Employees::findOrFail($id);

        // Delete the employee
        $employee->delete();
         

        return redirect()->route('employees.index');
        // Return a response indicating the deletion was successful
        //return response()->json(['message' => 'Employee deleted successfully'], 200);
    }


    //method for api route
    public function apigetEmployee()
    {
        $employees=Employees::paginate(10);
        return response()->json($employees);
    }
}

    
