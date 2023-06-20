<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class ApiBaseController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function successResponse( $data , string|null $message= null , int $statusCode =200 ):JsonResponse
    {
          // solution 1
//          return response()->json(['data'=> $data , 'message'=> $message],$statusCode);

        //solution 2 is better:
        return response()->json(compact('data' , 'message') , $statusCode);

    }
}
