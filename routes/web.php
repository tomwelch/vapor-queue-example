<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    \App\Jobs\ExampleJob::dispatch();

    return 'Job dispatched ['.app('random-string').']';
});
