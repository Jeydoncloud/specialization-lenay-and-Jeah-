<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
 use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        // $user= User::first();
       $validatedData = $request -> validate([
            'email'=>'required|email',
            'password' => 'required|min:8'

        ]);
        $user = User::where ('email', $validatedData['email'])->first();

        if ($user && Hash::check($validatedData['password'], $user->password)){
            $token = $user-> createToken('api', ['create']);
            return[
                'token' =>$token->plainTextToken
            ];


        }
        else{
            return [
                'error'=> "Invalid Credentials"
            ];
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
