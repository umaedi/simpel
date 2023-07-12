<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Perizinan;
use App\Services\PerizinanService;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    protected $perizinan;
    public function __construct(Perizinan $perizinan)
    {
        $this->perizinan = new PerizinanService($perizinan);
    }
    public function index()
    {
        if (\request()->ajax()) {
            if (\request()->ajax()) {
                $perizinan = $this->perizinan->Query();
                $page = \request()->get('paginate', 15);

                if (\request()->jenis_perizinan) {
                    $perizinan->where('jenis_perizinan', request()->jenis_perizinan);
                }

                if (\request()->nama_dokumen) {
                    $perizinan->where('nama_dokumen', request()->nama_dokumen);
                }

                $data['table'] = $perizinan->latest()->paginate($page);
                return view('frontend.data._data_table', $data);
            }
        }
        $data['title'] = 'Data Perizinan Berusaha';
        $data['persayaratan_dasar'] = Perizinan::where('jenis_perizinan', 'Sertifikat Standar')->count();
        $data['sertifikat_standar'] = Perizinan::where('jenis_perizinan', 'Persyarat Dasar')->count();
        $data['umku'] = Perizinan::where('jenis_perizinan', 'UMKU')->count();
        return view('frontend.data.index', $data);
    }
}
