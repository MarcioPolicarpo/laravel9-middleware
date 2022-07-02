<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function getInvoices()
    {
        $result = DB::select('select * from invoices');
        return response()->json($result);
    }
}
