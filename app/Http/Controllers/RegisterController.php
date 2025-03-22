<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:registers',
            'full_name' => 'required|string|max:50',
            'password' => 'required|string|min:8',
            'gender' => 'required|in:male,female',
            'age_group' => 'required|in:below_18,18_25,26_35,36_45,46_55,above_55',
            'education_level' => 'required|in:school,university,post_graduate',
            'interests' => 'required|string',
            'phone' => 'nullable|string|max:10',
            'address' => 'required|string',
            'work' => 'boolean',
        ]);

        // Format the work field (if it's from a checkbox, it might be "on" or null)
        $data = $request->all();
        $data['work'] = $request->has('work') ? true : false;

        // Hash the password
        $data['password'] = bcrypt($data['password']);

        Register::create($data);

        return redirect('/success')->with('success', 'REGISTER SUCCESS');
    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        return view('register');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
