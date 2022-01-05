<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\RecordExport;
use Maatwebsite\Excel\Facades\Excel;

class RecordExportController extends Controller
{
   /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new RecordExport, "record".date('m-d-Y').".xlsx");
    }
}
