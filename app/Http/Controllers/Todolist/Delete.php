<?php

namespace App\Http\Controllers\Todolist;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as db;
use App\Http\Controllers\Controller;

use App\Models\Tables\Todolist as todolist;

class Delete extends Controller
{
    public function index(Request $request, $id){
    	try {
    		todolist::where('idtodolist' , $id)->delete();
    		return response(['status' => 201, "msg" => 'Todolist has been deleted !'],201);
    	} catch (Exception $e) {
    		return response(['status' => 500, 'msg' => 'Interval server error !', 'detail' => $e->getMessage()], 500);
    	}
    }
}
