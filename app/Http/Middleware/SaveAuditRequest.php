<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Closure;

use App\Models\ApiAudit;

class SaveAuditRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        return $next($request);
    }

    public function terminate($request, $response){
        
        $input['user_id']      			= isset($request->user_id) ? $request->user_id : NULL;
        $input['endpoint']              = Request::path(); 
        $input['request']               = json_encode($request->all());
        $input['respones']              = $response->getContent();
        $input['ip_address']            = $request->ip();
        $input['created_at']            = round(microtime(true) * 1000);
        $input['rtime']                 = (round(microtime(true) * 1000) - LUMEN_START);
        
        $test = ApiAudit::create($input);
    }
}
