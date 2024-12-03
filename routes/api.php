<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Member\WebhookController;

Route::post('/webhook', [WebhookController::class, 'handler']);