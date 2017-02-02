<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('homePage');
});
Route::get('/wi-fi', function(){

    return view('wi-fiCollaboration');
})->name('myModel');

Route::get('/urbanShifts', function(){

    return view('urbanShifts');
});

Route::get('/rhododendrons', function(){

    return view('rhododendrons');
});

Route::get('/darjeelingRailways', function(){

    return view('darjeelingRailways');
});

Route::get('/articles', function(){

    return view('articles');
});

Route::get('/video', function(){

    return view('video');
});

Route::get('/initiatives', function(){

    return view('initiatives');
});

Route::get('/objectives', function(){

    return view('objectives');
});


Route::get('/missionVision', function(){

    return view('missionVision');
});

Route::get('/reports', function(){

    return view('reports');
});

Route::get('/cityFacts', function(){

    return view('cityFacts');
});


Route::resource('/sale', 'SaleController');




// Route::get('/form', function(){

//     return view('form');
// });

// Route::get('/subscriber', 'subscriberController@show');

// Route::post('/subscriber', 'subscriberController@store');

// // Route::get('/edit', 'subscriberController@edit');

// Route::get('/update', 'subscriberController@editMyRecord');

// Route::post('/editMyRecord', 'subscriberController@update');


Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
