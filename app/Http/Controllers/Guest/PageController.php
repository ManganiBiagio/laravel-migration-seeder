<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use DateTime;
use Illuminate\Http\Request;

class PageController extends Controller
{
     public function index() {
        $trainList=Train::whereDate("start_at",date("Y-m-d"))->get();
        return view("train",compact("trainList"));

    }
}
