<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Policy;
use App\Activity;
use App\Deliverable;

class StructureController extends Controller
{

	public function index()
	{
		$policies=Policy::all();
		$policies->map(function($p){
			$p->deliverables=Deliverable::where('policy_id',$p->id)
			->get();
			$p->deliverables->map(function($d){
				$d->activities=Activity::where('deliverable_id',$d->id)
				->get();
			});

		});
			
		return View::make('structure.index',['policies'=>$policies]);
	}

}
