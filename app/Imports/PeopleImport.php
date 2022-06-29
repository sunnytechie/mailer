<?php

namespace App\Imports;

use App\Models\People;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;

class PeopleImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new People([
            'email'     => $row[0],
            'category_id'    => $row[1]
        ]);
    }
}
