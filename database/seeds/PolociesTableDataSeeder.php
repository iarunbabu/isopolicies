<?php

use Illuminate\Database\Seeder;
use App\Policy;
use Illuminate\Database\Eloquent\Model;


class PolociesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
	    	Policy::create([
	            'name' => 'Policy',
	            'description' => 'Policy',
	            'code' => 'A.1'
	        ]);
    	}
    }
}
