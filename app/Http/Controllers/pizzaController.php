<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Pizzacontroller;
use Log;
use Input;
use App\Model\pizzaDeliveryTable;
use App\Model\pizzaDeliveryResult;

class pizzaController extends Controller {

  public function pizzahome()
  {
    return view('pizza.pizza_home');

  }

  public function DataSave()
  {
    $dataToSave = Input::get('dataToSave');
    $homeCount = $dataToSave[19];
  	log::info($dataToSave);

    for($i=0; $i<$homeCount; $i++){
      $pizzaDeliveryTable = new pizzaDeliveryTable;

      $pizzaDeliveryTable->team_id = $dataToSave[0];
      $pizzaDeliveryTable->home_no = $dataToSave[4][$i];
      $pizzaDeliveryTable->pizza_type = $dataToSave[5][$i];
      $pizzaDeliveryTable->order_type = $dataToSave[6][$i];
      $pizzaDeliveryTable->order_time = $dataToSave[7][$i];
      $pizzaDeliveryTable->pizza_delivery_time = $dataToSave[8][$i];
      $pizzaDeliveryTable->cd = $dataToSave[9][$i];
      $pizzaDeliveryTable->cpd = $dataToSave[10][$i];
      $pizzaDeliveryTable->cpcd = $dataToSave[11][$i];
      $pizzaDeliveryTable->ipd = $dataToSave[12][$i];
      $pizzaDeliveryTable->tip = $dataToSave[13][$i];

      $pizzaDeliveryTable->save();
    }

      $pizzaDeliveryResult = new pizzaDeliveryResult;

      $pizzaDeliveryResult->team_id = $dataToSave[0];
      $pizzaDeliveryResult->total_time = $dataToSave[1];
      $pizzaDeliveryResult->score = $dataToSave[2];
      $pizzaDeliveryResult->count_penalty = $dataToSave[3];
      $pizzaDeliveryResult->count_cd = $dataToSave[14];
      $pizzaDeliveryResult->count_cpd = $dataToSave[15];
      $pizzaDeliveryResult->count_cpcd = $dataToSave[16];
      $pizzaDeliveryResult->count_ipd = $dataToSave[17];
      $pizzaDeliveryResult->count_tip = $dataToSave[18];

      $pizzaDeliveryResult->save();

    return view('pizza.pizza_home');
  }

  public function ResetData(){
    $resetTeamId = Input::get('pizzaResetDataTeamId');

    $resetTableData = pizzaDeliveryTable::where('team_id', $resetTeamId)->get();
    $resetTeamResultData = pizzaDeliveryResult::where('team_id', $resetTeamId)->first();

    $resetData = ['resetTableData' => $resetTableData, 'resetTeamResultData' => $resetTeamResultData];
    //Log::info($resetData);
    return json_encode($resetData);
  }
}


