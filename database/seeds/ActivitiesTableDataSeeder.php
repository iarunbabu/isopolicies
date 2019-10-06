<?php

use Illuminate\Database\Seeder;
use App\Activity;
use Illuminate\Database\Eloquent\Model;


class ActivitiesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        for ($i=0; $i < 3; $i++) { 
	    	Activity::create([
	    		'deliverable_id' => 1,
	            'name' => 'Activity'.$i,
	            'description' => 'Activity'.$i,
	            'code' => 'A.1'
	        ]);
    	}
    }
}
