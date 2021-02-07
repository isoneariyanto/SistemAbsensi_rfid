<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Censor;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AndroidController extends Controller
{
    public function AndroidCensorShow()
    {
        $cs = Censor::select('id','heartbeat','temperature','created_at')
                    ->withCasts([
                        'created_at' => 'datetime:Y-m-d H:i'
                    ])->get();
        echo $cs;
    }

    public function AndroidPatientShow(){
        $patient = Patient::select('first_name','last_name','placeofbirth','dateofbirth','address','country','job')
            ->withCasts([
                'dateofbirth' => 'datetime:d-m-Y'
            ])->get();
        echo $patient;
    }

    public function AndroidLoginAuth(Request $request){
        // $token = $request->session()->token();
        //$response = array();
        // $token = csrf_token();
        // $email = $request->email;
        // $password = $request->password;
        $creds = $request->only(['email','password']);
        if(!$token=auth()->attempt($creds)){
        	return response()->json([
        		'login' => false,
                'message' => 'invalid credentials'
    		]);
        }

        return response()->json([
        	'login' => true,
        	'token' => $token,
        	'user' => Auth::user()
    	]);
        // if(is_null($email) && is_null($password)){
        //     echo "null";
        // }else{
        //     $str = array([
        //         '_token' => $token,
        //         'email' => $email,
        //         'password' => $password
        //     ]);
        //     echo json_encode($str);
        // } 
        // print_r($request->input('email'));
    }

    public function AndroidChangeEmail(Request $request){
        // dd($request->all());
        // $auth = User::find($request->id);
        // if(Auth::user()->id != $request->id){
        //     return response()->json([
        //         'change' => false,
        //         'message' => 'unauthorized access'
        //     ]);
        // }
        // $user = User::find($request->id);
        $user = User::where('id', $request->id)
                ->update([
                    'email' => $request->email
                ]);
        if($user){
            return response()->json([
                'change' => true,
                'message' => 'Success Updated',
                // 'token' => $token        
            ]);
        }
        return response()->json([
            'change' => false,
            'message' => 'Failed Updated'        
        ]);
    }

    public function logout(Request $request){
        try {
            JWTAuth::invalidate(JWTAuth::parseToken($request->token));
            return response()->json([
                'login' => false,
                'message' => 'Logout Success'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'login' => true,
                'message' => ''.$e
            ]);
        }
    }

    public function showtoken(){
        // $token = $request->session()->token();
        $token = csrf_token();
        echo $token;
    }
}
