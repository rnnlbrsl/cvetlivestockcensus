<?php

namespace App\Http\Controllers;

use App\Records; //added to access the Inventory model.
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use Excel;
use Maatwebsite\Excel\Facades\Excel;

class RecordController extends Controller
{
    public function index()
    {
        
        $record = Records::orderBy('record_id', 'asc')->get(); //Fetch all the records from Records model/database.
        $total_row = $record->count();
        return view('records', [
            'records' => $record, //Data passed to the 'records' view.
            'total_record' => $total_row,
        ]);
    }

    function search() {
        return view('live_search');
    }   

    function action(Request $request) {
        if($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            
            if ($query != '') {
                $data = DB::table('records')
                    ->where('firstname', 'like', '%'.$query.'%')
                    ->orWhere('lastname', 'like', '%'.$query.'%')
                    ->orderBy('record_id', 'asc')->get();
                    // ->paginate(5);
            } else {
                $data = DB::table('records')
                    ->orderBy('record_id', 'asc')->get();
                    // ->paginate(5);
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $name = $row->lastname.' '.$row->firstname .' '. $row->middlename;

                    $output .= '<tr>'.
                        '<td>'.
                        '<div class="btn-group" role="group" aria-label="Action Buttons">'.
                            '<a class="btn btn-success" onclick="buttonOnClick('.$row->record_id.')">View</a>'.
                            '<a class="btn btn-primary" onclick="buttonOnClick('.$row->record_id.')">Edit</a>'.
                            '<a class="btn btn-danger" onclick="buttonOnDelete('.$row->record_id.')">Delete</a>'.
                        '</div>'.
                        '</td>'.
                        '<td>'.$row->record_id.'</td>'.
                        '<td>'.$name.'</td>'.
                        '<td>'.$row->gender.'</td>'.
                        '<td>'.$row->houseno.'</td>'.
                        '<td>'.$row->sitio.'</td>'.
                        '<td>'.$row->barangay.'</td>'.
                        '<td>'.$row->mcattle.'</td>'.
                        '<td>'.$row->fcattle.'</td>'.
                        '<td>'.$row->mcarabao.'</td>'.
                        '<td>'.$row->fcarabao.'</td>'.
                        '<td>'.$row->mcanine.'</td>'.
                        '<td>'.$row->fcanine.'</td>'.
                        '<td>'.$row->mfeline.'</td>'.
                        '<td>'.$row->ffeline.'</td>'.
                        '<td>'.$row->fattener.'</td>'.
                        '<td>'.$row->breeder.'</td>'.
                        '<td>'.$row->phen.'</td>'.
                        '<td>'.$row->prooster.'</td>'.
                        '<td>'.$row->drake.'</td>'.
                        '<td>'.$row->duck.'</td>'.
                        '<td>'.$row->buck.'</td>'.
                        '<td>'.$row->doe.'</td>'.
                        '<td>'.$row->grooster.'</td>'.
                        '<td>'.$row->ghen.'</td>'.
                        '<td>'.$row->mnative.'</td>'.
                        '<td>'.$row->fnative.'</td>'.
                        '<td>'.$row->latitude.'</td>'.
                        '<td>'.$row->longitude.'</td>'.
                        '<td>'.$row->admin_id.'</td>'.
                    '</tr>';
                }
            } else {
                $output = '<tr>'.
                        '<td align="left" colspan="28">No Data Found</td>'.
                    '</tr>';
            }

            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
             echo json_encode($data);
        }
    }

    public function record(Request $request) {
        $data = DB::table('records')->where('record_id', $request->input('id'))->first();
        return json_encode($data);
    }

    public function delete(Request $request) {
        Records::where('record_id', $request->input('record_id'))
            ->delete();
    }

    public function update(Request $request) {
        //var_dump($request->input('latitude')); exit;
        $lastname = $request->input('lastname');
        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $gender = $request->input('gender');
        $houseno = $request->input('houseno');
        $sitio = $request->input('sitio');
        $barangay = $request->input('barangay');
        $mcattle = $request->input('mcattlecount');
        $fcattle = $request->input('fcattlecount');
        $mcarabao = $request->input('mcarabaocount');
        $fcarabao = $request->input('fcarabaocount');
        $mcanine = $request->input('mcaninecount');
        $fcanine = $request->input('fcaninecount');
        $mfeline = $request->input('mfelinecount');
        $ffeline = $request->input('ffelinecount');
        $fattener = $request->input('fattenercount');
        $breeder = $request->input('breedercount');
        $phen = $request->input('phencount');
        $prooster = $request->input('proostercount');
        $drake = $request->input('drakecount');
        $duck = $request->input('duckcount');
        $buck = $request->input('buckcount');
        $doe = $request->input('doecount');
        $grooster = $request->input('groostercount');
        $ghen = $request->input('ghencount');
        $mnative = $request->input('mnativecount');
        $fnative = $request->input('fnativecount');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        Records::where('record_id', $request->input('record_id'))
            ->update([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'middlename' => $middlename,
                'gender' => $gender,
                'houseno' => $houseno,
                'sitio' => $sitio,
                'barangay' => $barangay,
                'mcattle' => $mcattle,
                'fcattle' => $fcattle,
                'mcarabao' => $mcarabao,
                'fcarabao' => $fcarabao,
                'mcanine' => $mcanine,
                'fcanine' => $fcanine,
                'mfeline' => $ffeline,
                'fattener' => $fattener,
                'breeder' => $breeder,
                'phen' => $phen,
                'prooster' => $prooster,
                'drake' => $drake,
                'duck' => $duck,
                'buck' => $buck,
                'doe' => $doe,
                'grooster' => $grooster,
                'ghen' => $ghen,
                'mnative' => $mnative,
                'fnative' => $fnative,
                'latitude' => $latitude,
                'longitude' => $longitude,
                    ]);
                session()->flash('message', 'The record has been successfully updated!');
                return redirect('/records');
    }

    public function destroy(Request $request)
    {   
        //For Deleting Users
        $id = $request->get('id');
        Records::where('record_id', $id)->delete();
        session()->flash('message', 'The record has been deleted!');
        return redirect('/records');
    }

   /* Export to Excel */
   public function exportExcel()
   {
       $records = Records::all()->toArray();
       $records_array[] = array('First Name', 'Last Name', 'Gender', 'Sitio');

       foreach($records as $record) {
            $records_array[] = array(
                'First Name'  => $record['firstname'],
                'Last Name'   => $record['lastname'],
                'Gender'    => $record['gender'],
                'Sitio'   => $record['sitio']
            );
        }
        // return Excel::download($records_array, 'users.xlsx');
        Excel::create('Records Data', function($excel) use ($records_array) {
            $excel->setTitle('Records Data');
            $excel->sheet('Records Data', function($sheet) use ($records_array) {
                $sheet->fromArray($records_array, null, 'A1', false, false);
            });
        })->download('xlsx');
    //  return Excel::download(new ListExport, 'list.xlsx');
   }
}
