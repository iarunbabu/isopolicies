<?php

use Illuminate\Database\Seeder;
use App\Deliverable;
use Illuminate\Database\Eloquent\Model;

class DeliverablesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
	    	Deliverable::create([
	    		'policy_id' => 1,
	            'name' => 'Deliverable',
	            'description' => 'Deliverable',
	            'code' => 'A.D.1'
	        ]);
    	}
    }
}
