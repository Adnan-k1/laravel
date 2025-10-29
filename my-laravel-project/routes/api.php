<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Define API routes here

Route::middleware('api')->group(function () {
    // Example route
    Route::get('/example', function (Request $request) {
        return response()->json(['message' => 'This is an example API route']);
    });

    // Add your API routes below
});