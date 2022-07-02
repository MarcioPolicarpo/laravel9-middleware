<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Middleware\EnsureDatabaseIsAvailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(
    [
        EnsureDatabaseIsAvailable::class,
        //EnsureTokenIsValid::class /* See the Laravel Oficial Documentation to implement this class */
    ])
    ->get('/invoice', [InvoiceController::class, 'getInvoices']);