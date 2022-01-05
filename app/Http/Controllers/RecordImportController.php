<?php

namespace App\Http\Controllers;

use App\Imports\RecordsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RecordImportController extends Controller
{
    public function show()
    {
        return view('import');
    }

    public function import(Request $request) 
    {
        $this->validate($request, [
            'select_file'  => 'required|mimes:xls,xlsx'
        ]);
        $path = $request->file('select_file')->store('temp');

        Excel::import(new RecordsImport, $path);

        return back()->withStatus('Excel file has been uploaded successfuly!');
        return redirect('/')->with('success', 'The records has been imported!');
    }
}
