<?php

namespace App\Http\Controllers;

use App\Services\QueryService as QService;
use Illuminate\Http\Request;

class RunController extends Controller
{
	private $QService;

	public function __construct()
	{
		$this->QService = new QService();
	}

    public function index()
    {
    	$players = $this->QService->index();
    	//dd($players);

        return view(
        	'run',
        	['players' => $players]
        );
    }
}
