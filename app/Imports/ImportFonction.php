<?php

namespace App\Imports;

use App\Models\Fonction;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportFonction implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Fonction([
            //
        ]);
    }
}
