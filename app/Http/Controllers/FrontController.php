<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\UserServices;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class FrontController extends BaseController
{

    public function index(){
        return view('app.home');
    }

    public function userList(Request $request){
        $rv = UserServices::userList($request);
        return response()->json($rv, 200);
    }

}
