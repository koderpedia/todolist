<?php

use Illuminate\Database\Seeder;

class Project_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$project = new \App\Models\Tables\Project;
    	for ($i=0; $i < 20; $i++) { 
	    	$project::create(
	    		['project' => str_random(30)]
	    	);
    	}
    }
}
