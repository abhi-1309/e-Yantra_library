<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\formcontroller;
use log;
use Input;
use App\Model\FormModel;

class formcontroller extends Controller {

  public function eyrcform()
  {
    return view('form');
  }
  /* public function eyrcsubmit()
  {
   $p_name = Input::get("hodname");
   $clg_name = Input::get("clgname");
   $clg_address = Input::get("clgaddress");
   $pincode = Input::get("pincode");
   
   Log::info($p_name.' '.$clg_address.' '.$clg_name);
   */
   /*$detail = new FormModel;
   $detail->principal_name = Input::get("hodname");
   $detail->college_name = Input::get("clgname");
   $detail->college_address = Input::get("clgaddress");
   $detail->pincode = Input::get("pincode");
   return 'done';
  }*/
  public function eyrclibrary()
   {
    return view('library');
   }
}


