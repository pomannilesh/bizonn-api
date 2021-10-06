<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Retailer;
use App\Traits\Retailers;
use App\Traits\UserAuth;
class RetailerController extends Controller
{
    use Retailers , UserAuth;
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
    public function register(Request $request){
        $input = $request->all();
        $token = $request->header('token');
        $validator = Validator::make($input,[
			'user_id' => 'required',
            'shop_name' => 'required',
			'phone' => 'required',
			'address' => 'required',
			'lat' => 'required',
			'lng' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['status' => false, 'message' => config('app.VALIDATION')]);
        }
		
		$checkValid = $this->userValid(['user_id' => $input['user_id'],'token' => $token]);
		if(!$checkValid){
			return response()->json(['status' => false, 'message' => config('app.invalid_token')]);
		}
		
        // if present
        if(!empty($input)){
            $input['status'] = 1;
			$input['created_at'] = config('app.CURRENTEPOCH');
            // update status
            $retailerAdd = Retailer::insert($input);
			if(!empty($retailerAdd)){
				return response()->json(['status' => TRUE, 'message' => config('app.retailer_save')], 200);
			}else{
				return response()->json(['status' => FALSE, 'message' => config('app.retailer_not_save')], 200);
			}
			 
        }else{
			return response()->json(['status' => FALSE, 'message' => config('app.INVALID_DATA')], 200);
			
		}
        
       
    }
	
	public function list(Request $request){
		$input = $request->all();
		$token = $request->header('token');
		
		$validator = Validator::make($input,[
			'latlng' => 'required',
			'user_id'=> 'required',
        ]);
		
		if($validator->fails()){
            return response()->json(['status' => false, 'message' => config('app.VALIDATION')]);
        }
		$checkValid = $this->userValid(['user_id' => $input['user_id'],'token' => $token]);
		if(!$checkValid){
			return response()->json(['status' => false, 'message' => config('app.invalid_token')]);
		}
		$retailers = $this->getAllRetailers($input['latlng']);
		return response()->json(['status' => TRUE, 'data' => $retailers], 200);
	}
}
