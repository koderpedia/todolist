<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
   	public $timestamps = false;

   	protected $table = 'todolist';

   	protected $guarded = ['idtodolist', 'created_at'];
}
