<?php

namespace App\Traits;
use Auth;
use DB;

use App\Models\Retailer;

trait Retailers {
   
    public function getAllRetailers($latlng){    
         $latlang = explode(",", $latlng);
         $lat = $latlang[0];
         $lng = $latlang[1];
		 $radius = 10;

       // DB::enableQueryLog();                       
        $subQuery = DB::table('retailers')->select("*");

        $addresses = DB::query()->selectRaw("*, 
                            (6371 * acos (
                              cos ( radians(".$lat.") )
                              * cos( radians( lat ) )
                              * cos( radians( `lng` ) - radians(".$lng.") )
                              + sin ( radians(".$lat.") )
                              * sin( radians( lat ) )
                            ) ) as distance")
                            ->from(\DB::raw(' ( ' . $subQuery->toSql() . ' ) AS counted '))
                            ->havingRaw('distance <='.$radius)
                            ->orderBy('distance','asc')
                            ->get()
                            ->toArray();
		return $addresses;
    }
}