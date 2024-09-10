<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $role = "User";

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'unique:users,email',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
            
        } elseif ($validator->passes()) {
            
            $user['name']     = $request->name;
            $user['email']    = $request->email;
            $user['password'] = bcrypt($request->password);
            $user['birthdate']= $request->birthdate;
            $user['role']     = $role;

            $user->save();
    
            return view('auth.login')->with('success', 'Data berhasil ditambahkan !');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
