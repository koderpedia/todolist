<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as db;
use App\Http\Controllers\Controller;

use App\Model\Tables\Project as project;

class Load extends Controller
{
    public function index(Request $request) {
    	$limit = 30;
    	$project = db::table("project")
    	->when($request['id'], function($query) use ($request){
    		$query->where('idproject', '=', $request['id']);
    	})
    	->when($request['search'], function($query) use ($request) {
    		$query->where("project", "like", "%$request[search]%");
    	})
    	->when($request['start'], function($query) use ($request){
    		$query->skip($start);
    	})
    	->take($limit)
    	->get();

    	if($project->count() > 0) 
    		return response(['status' => 200, 'item' => $project], 200);
    	else
    		return response(['status' => 404, 'msg' => 'Project not found !'], 404);
    }
}
