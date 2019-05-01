<?php

namespace App\Http\Controllers\Todolist;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as db;
use App\Http\Controllers\Controller;

use App\Models\Tables\Todolist as todolist;


class Update extends Controller
{
    public function index(Request $request) {
    	$id = $request->input("id");
    	$idproject = $request->input('idproject');
    	$todolist = $request->input("todolist");
    	$c = empty($request->input('c')) ? 0 : 1;
    	$r = empty($request->input('r')) ? 0 : 1;
    	$u = empty($request->input('u')) ? 0 : 1;
    	$d = empty($request->input('d')) ? 0 : 1;

		try {
			todolist::where('idtodolist', $id)
			->where('idproject', $idproject)
			->update([
				"todolist" => $todolist,
				"c" => $c,
				"r" => $r,
				"u" => $u,
				"d" => $d,
				"updated_at" => date("Y-m-d H:i:s")
			]);
			return response(['status' => 201, "msg" => 'Todolist has been updated !'], 201);
		} catch (\Exception $e) {
			return response(['status' => 500, "msg" => "Internal server error !", 'detail' => $e->getMessage()], 500);
		}
    }	
}
