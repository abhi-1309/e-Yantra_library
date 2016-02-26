<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Pizzacontroller;
use Log;
use Input;
use DB;
use exception;
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
    log::info($dataToSave);
    $teamID =$dataToSave[0]; 
    $teamTableData = pizzaDeliveryTable::where('team_id', $teamID)->orderBy('run_count', 'DESC')->first();
    if(count($teamTableData)<1)
      {
        $runCountData = 1;
      }else{

        $runCountData=$teamTableData->run_count;
        $runCountData=$runCountData+1;
      }


    try
    {
      if(count($dataToSave) == 20){
        $homeCount = $dataToSave[19];
        if(count($dataToSave[5])  == $homeCount && count($dataToSave[6])  == $homeCount){
          for($i=0; $i<$homeCount; $i++){
            $pizzaDeliveryTable = new pizzaDeliveryTable;

            $pizzaDeliveryTable->team_id = $dataToSave[0];
            $pizzaDeliveryTable->run_count = $runCountData;
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
            if(!$pizzaDeliveryTable->save()){
              Log::info('not saved'.$i);
              throw new Exception("Not Saved");
            }
          }

          $pizzaDeliveryResult = new pizzaDeliveryResult;

          $pizzaDeliveryResult->team_id = $dataToSave[0];
          $pizzaDeliveryResult->run_count = $runCountData;
          $pizzaDeliveryResult->total_time = $dataToSave[1];
          $pizzaDeliveryResult->score = $dataToSave[2];
          $pizzaDeliveryResult->count_penalty = $dataToSave[3];
          $pizzaDeliveryResult->count_cd = $dataToSave[14];
          $pizzaDeliveryResult->count_cpd = $dataToSave[15];
          $pizzaDeliveryResult->count_cpcd = $dataToSave[16];
          $pizzaDeliveryResult->count_ipd = $dataToSave[17];
          $pizzaDeliveryResult->count_tip = $dataToSave[18];

          $pizzaDeliveryResult->save();

          if(!$pizzaDeliveryResult->save()){
            Log::info('not saved');
            throw new Exception("Not Saved");
          }
          return json_encode('success');
        }
        else{
          throw new Exception("Inputs are not correct");
        }
      }
      else{
          Log::info(count($dataToSave));
          throw new Exception("Inputs are not correct");
      }
    }
    catch(Exception $e)
    {
      //DB::roleback();
      Log::info('error came');
      return json_encode(['error' => 'Not Saved!']);
    }
  }

  public function ResetData(){
    $resetTeamId = Input::get('pizzaResetDataTeamId');

    $resetTableData = pizzaDeliveryTable::where('team_id', $resetTeamId)->get();
    $resetTeamResultData = pizzaDeliveryResult::where('team_id', $resetTeamId)->first();

    $resetData = ['resetTableData' => $resetTableData, 'resetTeamResultData' => $resetTeamResultData];
    //Log::info($resetData);
    return json_encode($resetData);
  }

  public function ScoreResult(){
    return view('pizza.pizza_score_result');
  }

  public function scoreResultData(){

    $scoreResultData = pizzaDeliveryResult::orderBy('team_id', 'ASE')->get();
    Log::info($scoreResultData);
    return json_encode($scoreResultData);
  }

  public function ScoreDetail(){
    return view('pizza.pizza_score_detail');
  }

  public function scoreDetailData(){
     Log::info("hello");
    $TeamId = Input::get('pizzaScoreId');

   
    

    $TeamDetailData = pizzaDeliveryTable::where('team_id', $TeamId)->get();
    $TeamDetailResultData = pizzaDeliveryResult::where('team_id', $TeamId)->get();
    Log::info($TeamDetailData);
    Log::info($TeamDetailResultData);
    $TeamFinalData = ['TeamDetailData' => $TeamDetailData, 'TeamDetailResultData' => $TeamDetailResultData];
    return json_encode($TeamFinalData);

  }

 
}


