<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothe;

class ClotheController extends Controller
{
	public function index() {
		$all_clothes = Clothe::all();
		return view('clothes', ['clothes' => $all_clothes]);
	}
}
