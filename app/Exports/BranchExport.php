<?php

namespace App\Exports;

use App\Models\SchoolBranches;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class BranchExport implements FromCollection, WithHeadings, WithMapping, WithStyles, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings():array{
        return[
            'Registration Number',
            'Branch Name',
            'Director Name',
            'Branch Email',
            'Alternate Email',
            'Branch Phone',
            'Branch Address',
            'Year Establishment',
            'Branch Alias',
            'Institution Type',
            'Institution Categoty',
            'Office Number',
        ];
    } 

    public function collection()
    {
        return SchoolBranches::where('delete_status', 0)->get();
    }

    public function map($row): array{
        $fields = [
            $row->registration_number,
            $row->branch_name,
            $row->director_name,
            $row->branch_email,
            $row->alternate_email,
            $row->branch_phone,
            $row->branch_address,
            $row->year_establishment,
            $row->branch_alias,
            $row->institution_type,
            $row->institution_categoty,
            $row->office_number,
        ];
        return $fields;
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],

            // Styling a specific cell by coordinate.
            //'B2' => ['font' => ['italic' => true]],

            // Styling an entire column.
            //'C'  => ['font' => ['size' => 16]],
        ];
    }
}
