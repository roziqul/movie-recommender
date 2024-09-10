<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $input = $request->all();
      
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
      
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            return redirect()->route('recommendations.create');
        }else{
            return redirect()->route('login')->with('error','Email And Password are incorrect.');
        }
    }

    public function register(StoreAuthRequest $request)
    {
        
    }

    public function logout(Request $request)
    {
        
    }
}
