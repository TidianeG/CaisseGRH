<?php

namespace App\Imports;

use App\Models\Direction;
use App\Models\Subdivision;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportSubdivision implements ToModel
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
            $code_exsit = Subdivision::where('code_subdivision', $code)->first();
        } while (!empty($code_exsit));

        $nom_subdivision_existe = Subdivision::where('nom_subdivision', strtoupper($row[1]))->first();
        $direction = Direction::where('code_direction', $row[0])->first();
        if (empty($nom_subdivision_existe) && isset($direction)) {
            //dd($direction);
            return new Subdivision([
                'code_subdivision' => $code,
                'nom_subdivision' => strtoupper($row[1]),
                'description' => $row[2],
                'direction_id' => $direction->id,
            ]);
        }
    }
}
