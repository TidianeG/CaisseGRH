<?php

namespace App\Imports;

use App\Models\Section;
use App\Models\Subdivision;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportSection implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        do {
            $code = rand(501, 600);
            $code_exsit = Section::where('code_section', $code)->first();
        } while (!empty($code_exsit));

        $nom_section_existe = Section::where('nom_section', strtoupper($row[1]))->first();
        $subdivision = Subdivision::where('code_subdivision', $row[0])->first();
        if (empty($nom_section_existe) && isset($subdivision)) {
            //dd($direction);
            return new Section([
                'code_section' => $code,
                'nom_section' => strtoupper($row[1]),
                'description' => $row[2],
                'subdivision_id' => $subdivision->id,
            ]);
        }
    }
}
