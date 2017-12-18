<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

use App\User;
use App\Professor;

class ApiController extends Controller
{
    public function professorInfo($id)
    {
    	// $professor = DB::table('professors')->where('user_id', $id)->first();
    	// $user = User::find($professor->user_id);
    	// // $merged = $user->merge($professor);
    	// $merged = $professor->merge($user);
    	$data = DB::table('professors')->join('users', 'professor.user_id', '=', 'user.id')
    		->select('professors.*', 'users.*')->get();

    	// $merged = array_merge($professor->toArray(), $user->toArray());
    	// return $merged;
    	// return $merged;
    	// return response()->json($collects);
    	// return $collects->all();
    	return response()->json($merged->all());
    	// dd($professor);
    	// return $professor;
    }
}