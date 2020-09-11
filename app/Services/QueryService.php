<?php

namespace App\Services;

use App\Models\Player;

class QueryService
{
    public function index()
    {
    	return Player::with(
    		['classe']
    	)->get();
    }
}
