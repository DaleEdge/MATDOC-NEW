<?php

namespace App\Exports;

use App\Models\SchoolCourse;
use App\Models\SchoolBranches;
use App\Models\SchoolAdmissionForm;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class StudentExport implements FromCollection, WithHeadings, WithMapping, WithStyles, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings():array{
        return[
            'Roll Number',
            'Branch Name',
            'First Name',
            'Middle Name',
            'Last Name',
            'Course',
            'Gender',
            'DOB',
            'Email',
            'Father Name',
            'Mother Name',
            'Parents Contact',
            'Aadhar Number',
            'Religion',
            'Cast',
            'Address', 
        ];
    } 


    public function collection()
    {
        //return SchoolAdmissionForm::all();
        $list = SchoolAdmissionForm::where('delete_status', 0)->get();
        foreach ($list as $data){
            $data->branch_id = SchoolBranches::where('id', $data->branch_id)->first()->branch_name;
            $data->class = SchoolCourse::where('id', $data->class)->first()->course_name;
        }
        return $list;
    }

    public function map($row): array{
        $fields = [
            $row->roll_number,
            $row->branch_id,
            $row->first_name,
            $row->middle_name,
            $row->last_name,
            $row->class,
            $row->gender,
            $row->dob,
            $row->email,
            $row->father_name,
            $row->mother_name,
            $row->parents_contact,
            $row->aadhar_number,
            $row->religion_name	,
            $row->cast,
            $row->address,
        ];
        return $fields;
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }
}
