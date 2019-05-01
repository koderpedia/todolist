<?php

namespace App\Http\Controllers\Todolist;

use Illuminate\Http\Request as request;
use Illuminate\Support\Facades\DB as db;
use App\Http\Controllers\Controller;

use App\Models\Tables\Todolist as todolist;
use App\Models\Views\V_todolist as v_todolist;

class Load extends Controller
{
    public function index(request $request) {
    	$limit = 40;

    	$id = $request['id'];

    	if(empty($id))
    		return response(['status' => 400, "msg" => "Invalid parameter !"], 400);
    	else {
	    	$todolist = db::table("v_todolist")
	    	->where("idproject", "=", $id)
	    	->when($request['search'], function($query) use ($request) {
	    		$query->where("todolist", "like", "%$request[search]%");
	    	})
	    	->when($request['start'], function($query) use ($request) {
	    		$query->skip($request['start']);
	    	})
	    	->take($limit)
	    	->get();

	    	if($todolist->count() > 0)
	    		return response(['status' => 201, 'item' => $todolist], 201);
	    	else
	    		return response(['status' => 404, 'msg' => 'Todolist not found !'], 404);
    	}
    }
}
