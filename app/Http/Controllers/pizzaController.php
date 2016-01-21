<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Pizzacontroller;
use log;
use Input;
use App\Model\FormModel;

class pizzaController extends Controller {

  public function pizzahome()
  {
    return view('pizza.pizza_home');
  }

 
}


