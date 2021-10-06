<?php

namespace App\Traits;
use Illuminate\Support\Facades\Hash;

use Auth;
use DB;

use App\Models\PhoneUser;
use App\Models\User;

trait Account {
	
	
	public function register_user($data){
		$checkMobile = User::where('tel_number',$data['tel_number'])->first();
		if($checkMobile){
			return 'exists_tel';
		}
		if($data['email'] != ''){
			$checkEmail = User::where('email',$data['email'])->first();
			if($checkEmail){
				return 'exists_email';
			}
		}
		$token = bin2hex(openssl_random_pseudo_bytes(50));
		$userData = array(
            'email'   => $data['email'],
            'password' => Hash::make($data['password']),
            'name'     => $data['name'],
			'tel_number' => $data['tel_number'],
            'session_token' => $token,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
			'user_type' => 'Vendor'
        );
		
		$userAdd = User::create($userData);
		if($userAdd){
			$userInfo = User::selectRaw('id as user_id,name,tel_number,email,session_token')->where('id',$userAdd->id)->get()->first();
			return $userInfo;
		}else{
			return false;
		}
	}
	
	public function login_user($data){
		$loginData = User::where('tel_number',$data['tel_number'])->first();
		if($loginData){
			if(Hash::check($data['password'],$loginData->password)){
				$loginInfo['session_token'] = bin2hex(openssl_random_pseudo_bytes(50));
				User::where('id',$loginData->id)->update($loginInfo);
				$loginInfo['user_id'] = $loginData->id;
				$loginInfo['email'] = $loginData->email;
				$loginInfo['tel_number'] = $loginData->tel_number;
				return $loginInfo;
			}else{
				return 'invalid_pass';
			}
		}else{
			return false;
		}
	}
	
	private function generateOTP(){
        $otp = mt_rand(100000,999999);
        return $otp;
    }
	
	public function otpSend($mobile,$type){
		$checkMobile = User::where('tel_number',$mobile)->first();
		if(!$checkMobile){
			$checkMobile = PhoneUser::where('phone_no',$mobile)->get()->first();
			if(!$checkMobile){
				$otp = $this->generateOTP();
				$otpMsg = $otp." is your Bizonn Code for sign up";
				$fields = array(
					"sender_id" => "TXTIND",
					"message" => $otpMsg,
					"route" => "v3",
					"numbers" => $mobile,
				);
				$addPhone = PhoneUser::insert(['phone_no' => $mobile,'otp' => $otp,'created_at'=>date('Y-m-d H:i:s')]);
				if($addPhone){
					$sendSMS = $this->sendSMS($fields);
					
					if($sendSMS){
						return true;
					}else{
						return false;
					}
				}else{
					return false;
				}
			}else{
				return 'exists';	
			}
		}else{
			if($type == 'login'){
				$otp = $this->generateOTP();
				$otpMsg = $otp." is your Bizonn Code for sign up";
				$fields = array(
					"sender_id" => "TXTIND",
					"message" => $otpMsg,
					"route" => "v3",
					"numbers" => $mobile,
				);
				$addOtp = User::where('id',$checkMobile->id)->update(['otp_code' => $otp]);
				if($addOtp){
					$sendSMS = $this->sendSMS($fields);
					
					if($sendSMS){
						return true;
					}else{
						return false;
					}
				}else{
					return false;
				}
			}else{
				return 'exists';
			}
			
		}
		
		
	}
	
	public function otpVerify($request){
		if(!empty($request['tel_number']) && !empty($request['otp'])){
			if($request['type'] == 'login'){
				$checkOtp = User::where('tel_number',$request['tel_number'])->where('otp_code',$request['otp'])->get()->first();
				if($checkOtp){
					$loginInfo['session_token'] = bin2hex(openssl_random_pseudo_bytes(50));
					User::where('id',$checkOtp->id)->update($loginInfo);
					$loginInfo['user_id'] = $checkOtp->id;
					$loginInfo['email'] = $checkOtp->email;
					$loginInfo['tel_number'] = $checkOtp->tel_number;
					return $loginInfo;
				}else{
					return false;
				}
			}else{
				$checkOtp = PhoneUser::where('phone_no',$request['tel_number'])->where('otp',$request['otp'])->get()->first();
				if($checkOtp){
					return true;
				}else{
					return false;
				}
			}
			
		}
	}
	
	private function sendSMS($fields){
		$curl = curl_init();
		$key = config('app.SMS_KEY');
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => json_encode($fields),
		  CURLOPT_HTTPHEADER => array(
			"authorization: ".$key,
			"accept: */*",
			"cache-control: no-cache",
			"content-type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		 return false;
		} else {
		  return true;
		}
	}
	
    
}