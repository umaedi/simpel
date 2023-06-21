<?php

namespace App\Imports;

use App\Models\Perizinan;
use Maatwebsite\Excel\Concerns\ToModel;

class PerizinanImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Perizinan([
            'no' => $row[0],
            'perizinan_id' => $row[1],
            'nama_perusahaan' => $row[2],
            'nib' => $row[3],
            'tgl_terbit' => $row[4],
            'uraian_status_penanaman_modal' => $row[5],
            'provinsi' => $row[6],
            'kabupaten' => $row[7],
            'proyek_id' => $row[8],
            'kd_resiko' => $row[9],
            'kbli' => $row[10],
            'tgl_izin' => $row[11],
            'jenis_perizinan' => $row[12],
            'nama_dokumen' => $row[13],
            'uraian_kewenangan' => $row[14],
            'uraian_status' => $row[15],
            'kewenangan' => $row[16],
            'kl_sektor' => $row[17],
        ]);
    }
}
