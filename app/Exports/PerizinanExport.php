<?php

namespace App\Exports;

use App\Models\Perizinan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PerizinanExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function collection()
    {
        return Perizinan::where('jenis_perizinan', $this->data)->get();
    }
}
