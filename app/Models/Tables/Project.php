<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    protected $guarded = ['idproject', 'created_at'];
}
