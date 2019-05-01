<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as db;
use App\Http\Controllers\Controller;

use App\Models\Tables\Project as project;
class Delete extends Controller
{
    public function index(Request $request, $id = null) {
    	if(empty($id))
    		return response(['status' => 400, 'msg' => "Invalid paramater !"], 400);
    	else {
    		$return = db::table('project')->where("idproject", "=", $id)->delete();
    		if($return)
    			return response(['status' => 201, 'msg' => 'Project has been deleted'], 201);
    		else
    			return response(['status' => 500, 'msg' => 'Internal server error !'], 500);
    	}
    }
}
