<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Traits\Account;

class AccountController extends Controller
{
    use Account;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        //
    }
	
	

    /*  Lists metadata of the machine and its associated user account
     *  Metadata such as associated template, all the machine fields, address details and 
     *  associated user account details such as privacy policy, etc 
     *  
     *  Request Param : identifier , password
     *
     */
   
	
	public function sendOtp(Request $request){
		$input = $request->all();
       
        $validator = Validator::make($input,[
            'tel_number' => 'required',
			'type' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['status' => false, 'message' => config('app.VALIDATION')]);
        }
		
        $otp = $this->otpSend($input['tel_number'],$input['type']);
		if($otp){
			if($otp === 'exists'){
				 return response()->json(['status' => false, 'message' => 'Phone number already exists']);
			}else{
				return response()->json(['status' => true, 'message' => 'OTP send sucessfully!']);
			}
		}else{
			return response()->json(['status' => false, 'message' => 'Phone number not added']);
			
		}
	}
	
	public function verifyOtp(Request $request){
		$input = $request->all();
        
        $validator = Validator::make($input,[
            'tel_number' => 'required',
			'otp' => 'required',
			'type' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['status' => false, 'message' => config('app.VALIDATION')]);
        }
		$otp = $this->otpVerify($input);
		
		if($otp == false){
			 return response()->json(['status' => false, 'message' => 'Invalid OTP']);
		}else{
			if($otp == true){
				return response()->json(['status' => true, 'message' => 'OTP verified successfully!']);
			}else{
				return response()->json(['status' => true,'userdata' => $otp, 'message' => 'Login successfully!']);
			}
			
		}
		
	}
	
	
	public function register(Request $request){
		$input = $request->all();
        
        $validator = Validator::make($input,[
			'name' => 'required',
            'tel_number' => 'required',
			'password' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['status' => false, 'message' => config('app.VALIDATION')]);
        }
		$register = $this->register_user($input);
		
		if($register){
			if($register === 'exists_tel'){
				return response()->json(['status' => false, 'message' => 'Phone number already exists']);
			}elseif($register === 'exists_email'){
				return response()->json(['status' => false, 'message' => 'Email already exists']);
			}else{
				return response()->json(['status' => true, 'userdata' => $register]);
			}
		}else{
			return response()->json(['status' => false, 'message' => 'User not registered']);
		}
	}
	
	
	public function login(Request $request){
		$input = $request->all();
        
        $validator = Validator::make($input,[
            'tel_number' => 'required',
			'password' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['status' => false, 'message' => config('app.VALIDATION')]);
        }
		$loginUser = $this->login_user($input);
		
		if($loginUser){
			if($loginUser === 'invalid_pass'){
				return response()->json(['status' => false, 'message' => 'Invalid Password']);
			}else{
				return response()->json(['status' => true, 'userdata' => $loginUser]);
			}
			 return response()->json(['status' => false, 'message' => 'Invalid OTP']);
		}else{
			return response()->json(['status' => false, 'message' => 'Invalid username and password']);
		}
	}
}
