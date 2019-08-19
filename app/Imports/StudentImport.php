<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            //


            'name'     => $row['name'],
            'parent_name' => $row['parent_name'],
            'address'  => $row['address'],
            'phone_no' => $row['phone'],
        ]);
    }
}
