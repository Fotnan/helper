<?php

namespace App\Http\Controllers;

use App\Imports\InvoiceImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ManagerController extends Controller
{
    public function import()
    {
        Excel::import(new InvoiceImport, request()->file('import_file'));

        return redirect('/')->with('success', 'All good!');
    }
}
