<?php

namespace App\Exports;

use App\Models\Perizinan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PerizinanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Perizinan::all();
    }
}
