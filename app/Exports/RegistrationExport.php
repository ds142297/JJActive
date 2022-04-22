<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegistrationExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Id',
            'Name',
            'Email',
            'Phone',
            'Emergency Contact Name',
            'Emergency Contact Number',
            'Address',
            'E-BIB',
            'Created_at',
            'Updated_at' 
        ];
    } 
    public function collection()
    {
        return Registration::all();
    }
}
