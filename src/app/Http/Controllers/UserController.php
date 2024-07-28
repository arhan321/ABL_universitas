<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $query = DB::connection('mysql')->table('users')->get();
        return response()->json($query, 200);
    }

    public function get_user(Request $request, $id){
        $user = User::where('id', $id)->first();
        if($user){
            $res['success'] = true;
            $res['message'] = $user;
            return response()->json($res, 200);
        } else {
            $res['success'] = false;
            $res['message'] = 'cannot find user';
            return response()->json($res, 404);
        }
    }
}
