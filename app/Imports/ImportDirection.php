<?php

namespace App\Imports;

use App\Models\Direction;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportDirection implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        do {
            $code = rand(301, 400);
            $code_exsit = Direction::where('code_direction', $code)->first();
        } while (!empty($code_exsit));

        $nom_direction_existe = Direction::where('nom_direction', strtoupper($row[0]))->first();
        
        if (empty($nom_direction_existe)) {
            return new Direction([
                'code_direction' => $code,
                'nom_direction' => strtoupper($row[0]),
                'description' => $row[1],
            ]);
        }
    }
}
