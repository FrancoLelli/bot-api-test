<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VertexAIController;

Route::post('/ask', [VertexAIController::class, 'query']);