<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suppliersLog;
use App\Models\supplier;

class SupplierLogController extends Controller
{
    public function index()
    {
        $supplierLogs = SuppliersLog::all();
        return view('suppliersLogs.index', compact('supplierLogs'));    }
}
