<?php

use App\Http\Controllers\EmailsController;
use App\Http\Controllers\TopicsController;
use Illuminate\Support\Facades\Route;

Route::controller(EmailsController::class)
    ->prefix('email')
    ->group(function () {
        Route::get('/', 'getEmailsByTopic');
        Route::post('/dispatch', 'dispatchEmail');
    }
);

Route::controller(TopicsController::class)
    ->prefix('topics')
    ->group(function () {
        Route::get('/', 'getTopics');
        Route::get('/{id}', 'getTopicByID');
    }
);
