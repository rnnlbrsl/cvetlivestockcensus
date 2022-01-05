<?php

namespace App\Http\Controllers;
use App\Records;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\File;

class AddRecordController extends Controller
{
    public function index()
    {
        return view('addrecord');
    }

    public function store(Request $request)
    {
        //Handle file upload
        if ($request->hasFile('image')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $record = new Records();
        $record->lastname = request('lastname');
        $record->firstname = request('firstname');
        $record->middlename = request('middlename');
        $record->gender = request('gender');
        $record->houseno = request('houseno');
        $record->sitio = request('sitio');
        $record->barangay = request('barangay');
        $record->mcattle = request('mcattle');
        $record->fcattle = request('fcattle');
        $record->mcarabao = request('mcarabao');
        $record->fcarabao = request('fcarabao');
        $record->mcanine = request('mcanine');
        $record->fcanine = request('fcanine');
        $record->mfeline = request('mfeline');
        $record->ffeline = request('ffeline');
        $record->fattener = request('fattener');
        $record->breeder = request('breeder');
        $record->phen = request('phen');
        $record->prooster = request('prooster');
        $record->drake = request('drake');
        $record->duck = request('duck');
        $record->buck = request('buck');
        $record->doe = request('doe');
        $record->grooster = request('grooster');
        $record->ghen = request('ghen');
        $record->mnative = request('mnative');
        $record->fnative = request('fnative');
        $record->latitude = request('latitude');
        $record->longitude = request('longitude');
        $record->img = $fileNameToStore;
        $record->admin_id = request('admin_id');
        $record->save();
        session()->flash('message', 'The record has been successfully added!');
        return redirect()->route('records');
    }
}