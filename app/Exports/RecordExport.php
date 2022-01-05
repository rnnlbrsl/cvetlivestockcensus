<?php
namespace App\Exports;

use App\Records;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class RecordExport implements FromQuery, WithHeadings, WithEvents
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Records::select(
            'record_id',
            'lastname',
            'firstname',
            'middlename',
            'gender',
            'houseno',
            'sitio',
            'barangay',
            'mcattle',
            'fcattle',
            'mcarabao',
            'fcarabao',
            'mcanine',
            'fcanine',
            'mfeline',
            'ffeline',
            'fattener',
            'breeder',
            'phen',
            'prooster',
            'drake',
            'duck',
            'buck',
            'doe',
            'grooster',
            'ghen',
            'mnative',
            'fnative',
            'latitude',
            'longitude'
        )->orderBy('record_id');
    }

    public function headings(): array
    {
        return [
            [
                'MASTERLIST OF ALAMINOS CITY LIVESTOCK CENSUS'
            ],
            
            [
                'No',
                'Lastname',
                'Firstname',
                'Middlename',
                'Gender',
                'House No',
                'Sitio',
                'Barangay',
                'Cattle',
                '',
                'Carabao',
                '',
                'Canine',
                '',
                'Feline',
                '',
                'Swine',
                '',
                'Poultry',
                '',
                'Duck',
                '',
                'Goat',
                '',
                'Game Fowl',
                '',
                'Native Pig',
                '',
                'Coordinates'
            ],
            [
                '', '', '', '', '', '', '', '', 'Male', 'Female', 'Male', 'Female', 'Male', 'Female', 'Male', 'Female', 'Swine', 'Poultry', 'Duck', 'Goat', 'Drake', 'Duck', 'Buck', 'Doe', 'Rooster', 'Hen', 'Male', 'Female', 'Longitude', 'Latitude'
            ],
        ];
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                // HEADER
                $cellRange = 'A1:AI1';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');

                /**
                 * Second Row
                 */
                $cellRange = 'A2:A3';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $cellRange = 'B2:B3';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $cellRange = 'C2:C3';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $cellRange = 'D2:D3';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $cellRange = 'E2:E3';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $cellRange = 'F2:F3';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $cellRange = 'G2:G3';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $cellRange = 'H2:H3';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);

                // Cattle
                $cellRange = 'I2:J2';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                // Carabao
                $cellRange = 'K2:L2';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                // Canine
                $cellRange = 'M2:N2';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                // Feline
                $cellRange = 'O2:P2';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                // Swine
                $cellRange = 'Q2:R2';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                // Poultry
                $cellRange = 'S2:T2';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                // Duck
                $cellRange = 'U2:V2';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                // Goat
                $cellRange = 'W2:X2';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                // Game Fowl
                $cellRange = 'Y2:Z2';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                // Native Pig
                $cellRange = 'AA2:AB2';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                // Coordinates
                $cellRange = 'AC2:AD2';
                $event->sheet->getDelegate()->mergeCells($cellRange);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setVertical('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
            },
        ];
    }
}