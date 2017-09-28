<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Tricore\Ronak\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Tricore\Ronak\CalculatorController@subtract');
