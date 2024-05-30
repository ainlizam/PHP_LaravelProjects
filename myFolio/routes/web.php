<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

    Route::get('/', function () {
        return view('mainpage');
    });

    //Route::resource ('/student', StudentController::class);

    Route::get('/add-student', function(){
        return view ('add-student');
    });

    Route::get('/student', [StudentController::class,'index']);
    Route::resource('addstudent', StudentController::class); //automatically when u use method post it will redirect you to store


    //Route Group
    /*Route::group([], function()
    {
    Route::get('/first',function()
    {
        echo "first route";
    });
    Route::get('/second',function()
    {
        echo "second route";
        //return view ('mainpage');
    });
    Route::get('/third',function()
    {
        echo "third route";
    });
});

    //Route Group (Path Prefix)
    Route::group(['prefix' => 'tutorial'], function()
    {
    Route::get('/aws',function()
    {
        echo "aws tutorial";
    });
    Route::get('/jira',function()
    {
        echo "jira tutorial";
    });
    Route::get('/testing',function()
    {
        echo "testing tutorial";
    });
});
    //route parameters
    Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});
    //Many parameters
    Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
    return 'Post '. $postId. 'Comments ' . $commentId;
});
//Define a route with a name in route/web.php
    Route::get('/food/traditional/sate/kambing/5cucuk', function () {
      echo "This is Traditional Food";
    })->name('profile');

    Route::get('profile1', function () {
        return redirect() -> route('profile'); //auto reroute to the profile page atas)
});
    */
//even kita letak kat url profile1, dia akan terus redirect ke url atas, no need to type url panjang2)





