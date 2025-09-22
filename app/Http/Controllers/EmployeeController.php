<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = Employee::all();
        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return  view('admin.employees.AddEmployee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $request->validate([
            // 'full_name' => 'required|string|max:255',
            // 'email' => 'required|email|unique:employees,email',
            // 'phone' => 'nullable|string|max:20',
            // 'gender' => 'nullable|string|max:10',
            // 'position' => 'nullable|string|max:100',
            // 'hire_date' => 'nullable',
            // 'salary' => 'nullable|numeric|min:0',
            // 'address' => 'nullable|string|max:500',
            // 'status' => 'nullable|in:active,inactive',
            // 'profile_picture' => 'nullable',
        ]);
        // $file = $request->file('profile_picture');

        // $fileName = time() . '_' . $file->getClientOriginalName();
        // dd($request->all());
        // $path = $request->file('image')->store('images', 'public');
        try {
            Employee::create([

                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'position' => $request->position,
                'hire_date' => $request->hire_date,
                'salary' => $request->salary,
                'address' => $request->address,
                'status' => $request->status,

                'profile_picture' => $request->file('profile_picture')->store('images', 'public'),
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //

        return view('admin.employees.update', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)

    //
    {
        //
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'nullable|string|max:20',
            'gender' => 'nullable|string|max:10',
            'position' => 'nullable|string|max:100',
            'hire_date' => 'nullable|date',
            'salary' => 'nullable|numeric|min:0',
            'address' => 'nullable|string|max:500',
            'status' => 'nullable|in:active,inactive',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $file = $request->file('profile_picture');

        $fileName = time() . '_' . $file->getClientOriginalName();

        // $path = $request->file('image')->store('images', 'public');
        try {
            Employee::create([

                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'position' => $request->position,
                'hire_date' => $request->hire_date,
                'salary' => $request->salary,
                'address' => $request->address,
                'status' => $request->status,

                'profile_picture' => $request->file('image')->store('images', 'public'),

            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
    }
}
