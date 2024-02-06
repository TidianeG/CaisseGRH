<?php

namespace App\Imports;

use App\Models\FiliereEmploi;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportFiliereEmploi implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       
        do {
            $code = rand(1001, 2000);
            $code_exsit = FiliereEmploi::where('code_filiere_emploi', $code)->first();
        } while (!empty($code_exsit));

        $nom_filiere_existe = FiliereEmploi::where('nom_filiere_emploi', strtoupper($row[0]))->first();
        
        if (empty($nom_filiere_existe)) {
            return new FiliereEmploi([
                'code_filiere_emploi' => $code,
                'nom_filiere_emploi' => strtoupper($row[0]),
                'description' => $row[1],
            ]);
        }
    }
}
