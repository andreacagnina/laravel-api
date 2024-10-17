<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController as ProjectController;
use App\Http\Controllers\Api\LeadController as LeadController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project');
Route::post('/contacts', [LeadController::class, 'store'])->name('send_email');
