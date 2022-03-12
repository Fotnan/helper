<?php

namespace App\Http\Controllers;

use App\Imports\InvoiceImport;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class MainController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function invoices(){
        $items =Invoice::all();
        $data=Auth::user()->object;
        $objects = explode(",", $data);
        return view('admin.invoices',compact('items', 'objects'));
    }

    public function imp(){
        return view('admin.import');
    }


    public function import(Request $request){
       Invoice::where('id','>',0)->delete();

        Excel::import(new InvoiceImport, request()->file('import_file'));

        return redirect('/')->with('success', 'All good!');
      // dd($request->file('import_file'));
    }

}
