<?php

namespace App\Traits;
use Auth;
use DB;

use App\Models\User;

trait UserAuth {
   
    public function userValid($data){
		$getUser = User::where('id',$data['user_id'])
						 ->where('session_token',$data['token'])
						 ->get();
		if($getUser->count() > 0){
			return true;
		}else{
			return false;
		}
	}
}