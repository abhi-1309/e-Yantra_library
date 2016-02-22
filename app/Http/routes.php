<?php
use Log;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::match(array('GET', 'POST'), '/form', array(
	'as'			=>	'form',
	'uses'			=>	'formcontroller@eyrcform'
	));
Route::match(array('GET', 'POST'), '/submitform', array(
	'as'			=>	'submitform',
	'uses'			=>	'formcontroller@eyrcsubmit'
	));
Route::match(array('GET'), '/library', array(
	'as'			=>	'library',
	'uses'			=>	'formcontroller@eyrclibrary'
	));
Route::match(array('GET'), '/pizza', array(
	'as'			=>	'pizza',
	'uses'			=>	'pizzaController@pizzahome'
	));
Route::match(array('GET','POST'), '/pizzaDataSave', array(

	'as'			=>	'pizzaDataSave',
	'uses'			=>	'pizzaController@DataSave'
	));
Route::match(array('GET','POST'), '/pizzaResetData', array(
	'as'			=>	'pizzaResetData',
	'uses'			=>	'pizzaController@ResetData'
	));
Route::match(array('GET'), '/pizzaScoreResult', array(
	'as'			=>	'pizzaScoreResult',
	'uses'			=>	'pizzaController@ScoreResult'
	));
Route::match(array('GET','POST'), '/scoreResultData', array(
	'as'			=>	'scoreResultData',
	'uses'			=>	'pizzaController@scoreResultData'
	));




