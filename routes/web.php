<?php

use App\Jobs\TestJob;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-queue', function () {
    TestJob::dispatch();
    return 'Job dispatched!';
});