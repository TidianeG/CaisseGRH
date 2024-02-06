<?php

namespace App\Imports;

use App\Models\Site;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportSite implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        

        do {
            $code = rand(100, 300);
            $code_exsit = Site::where('code_site', $code)->first();
        } while (!empty($code_exsit));

        $nom_site_existe = Site::where('nom_site', $row[0])->first();
        if (empty($nom_site_existe)) {
            return new Site([
                'code_site' => $code,
                'nom_site' => $row[0],
                'description' => $row[1],
            ]);
        }
    }
}
