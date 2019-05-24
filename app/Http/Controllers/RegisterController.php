<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use DB;
use Validator;

class RegisterController extends Controller 
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Request $request
    }

    public function newuser( Request $request ){

     $validator = Validator::make($request->all(), [ 
        'UserEmail' => 'required|email|unique:user',
    ]);
     if ($validator->fails()) {
        return $validator->messages();
        die();
    }
    $UserNome = $request->input('UserNome');
    $UserCpf = $request->input('UserCpf');
    $UserPhone = $request->input('UserPhone');
    $UserEmail = $request->input('UserEmail');
    $UserPassword = $request->input('UserPassword');
    
    $result = DB::table('user')->insert(
        [
            'UserNome' => $UserNome,
            'UserCpf' => $UserCpf,
            'UserPhone' => $UserPhone,
            'UserEmail' => $UserEmail,
            'UserPassword'=> $UserPassword
        ]
    );
    return json_encode($result);
}


}