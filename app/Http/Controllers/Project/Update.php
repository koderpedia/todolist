<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as db;
use App\Http\Controllers\Controller;

use App\Models\Tables\Project as project;

class Update extends Controller
{
    public function index(Request $request) {
    	$id = $request->input("id");
    	$project = $request->input("project");
    	if(empty($id) || empty($project))
    		return response(['status' => 400, 'msg' => 'Invalid parameter !']);
    	else {
    		$response = project::where('idproject', $id)
    		->update(['project' => $project, 'updated_at' => date("Y-m-d H:i:s")]);
    		if($response)
    			return response(['status' => $response, "msg" => "Project has been updated !"], 201);
    		else
    			return response(['status' => 500, 'msg' => 'Internal server error !'], 500);
    	}
    }
}
