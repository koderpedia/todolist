<?php

namespace App\Http\Controllers\Todolist;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as db;
use App\Http\Controllers\Controller;

use App\Models\Tables\Todolist as todolist;

class Insert extends Controller
{
    public function index(Request $request)
    {
    	$idproject = $request->input("idproject");
    	$todolist = $request->input("todolist");
    	try {
    		todolist::create([
    			'todolist' => $todolist,
    			'idproject' => $idproject
    		]);
    		return response(['status' => 201, 'msg' => "Todolist has been added"], 201);
    	} catch (Exception $e) {
    		return response(['status' => 400, 'msg' => "Invalid parameter", 'detail' => $e->getMessage()], 400);
    	}
    }
}
