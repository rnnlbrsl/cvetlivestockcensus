<?php

namespace App\Imports;

use App\Records;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RecordsImport implements ToModel, WithHeadingRow
{

    // public function __construct($admin_id)
    // {
    //     $this->admin_id = $admin_id;
    // }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // echo "<pre>";
        // print_r($row);exit;
        return new Records([
            'lastname'      => $row['lastname'],
            'firstname'     => $row['firstname'],
            'middlename'    => $row['middlename'],
            'gender'        => $row['gender'],
            'houseno'       => $row['house_no'],
            'sitio'         => $row['sitio'],
            'barangay'      => $row['barangay'],
            'mcattle'       => $row['m_cattle'],
            'fcattle'       => $row['f_cattle'],
            'mcarabao'      => $row['m_carabao'],
            'fcarabao'      => $row['f_carabao'],
            'mcanine'       => $row['m_canine'],
            'fcanine'       => $row['f_canine'],
            'mfeline'       => $row['m_feline'],
            'ffeline'       => $row['f_feline'],
            'fattener'      => $row['fattener'],
            'breeder'       => $row['breeder'],
            'phen'          => $row['poultry_hen'],
            'prooster'      => $row['poultry_rooster'],
            'drake'         => $row['drake'],
            'duck'          => $row['duck'],
            'buck'          => $row['buck'],
            'doe'           => $row['doe'],
            'grooster'      => $row['game_fowl_rooster'],
            'ghen'          => $row['game_fowl_hen'],
            'mnative'       => $row['male_native_pig'],
            'fnative'       => $row['female_native_pig'],
            'longitude'     => $row['longitude'],
            'latitude'      => $row['latitude'],
            'admin_id'      => 0
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }

}
