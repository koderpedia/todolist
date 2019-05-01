<?php

namespace App\Model\Views;

use Illuminate\Database\Eloquent\Model;

class V_todolist extends Model
{
	protected $table = 'v_todolist';

	protected $guarded = ['idtodolist', 'created_at'];
}
