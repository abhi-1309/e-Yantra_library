<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Pizzacontroller;
use log;
use Input;

class pizzaController extends Controller {

  public function pizzahome()
  {
  	return view('pizza.pizza_home');
  }

  public function DataSave()
  {
  	$dataToSave = Input::get('dataToSave');
  	Log::info($dataToSave);

    return view('pizza.pizza_home');
  }
}


