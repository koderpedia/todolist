<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as db;
use App\Http\Controllers\Controller;

use App\Models\Tables\Project as project;
class Insert extends Controller
{
    public function index(Request $request) {
    	$project = $request->input("project");
    	if(empty($project))
    		return response(['status' => 400, 'msg' => "Invalid paramater !"], 400);
    	else {
    		$return = project::create(['project' => $project]);
    		if($return)
    			return response(['status' => 201, 'msg' => 'New project has been added'], 201);
    		else
    			return response(['status' => 500, 'msg' => 'Internal server error !'], 500);
    	}
    }
}
