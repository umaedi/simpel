<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Imports\PerizinanImport;
use App\Http\Controllers\Response as Controller;
use App\Models\Perizinan;
use App\Services\PerizinanService;
use Maatwebsite\Excel\Facades\Excel;

class PerizinanController extends Controller
{
    protected $perizinan;
    public function __construct(Perizinan $perizinan)
    {
        $this->perizinan = new PerizinanService($perizinan);
    }

    public function index()
    {
        if (\request()->ajax()) {
            $perizinan = $this->perizinan->Query();
            $page = \request()->get('paginate', 10);

            if (\request()->jenis_perizinan) {
                $perizinan->where('jenis_perizinan', request()->jenis_perizinan);
            }

            if (\request()->nama_dokumen) {
                $perizinan->where('nama_dokumen', request()->nama_dokumen);
            }

            $data['table'] = $perizinan->latest()->paginate($page);
            return view('admin.perizinan._data_table', $data);
        }

        $data['persayaratan_dasar'] = Perizinan::where('jenis_perizinan', 'Sertifikat Standar')->count();
        $data['sertifikat_standar'] = Perizinan::where('jenis_perizinan', 'Persyarat Dasar')->count();
        $data['umku'] = Perizinan::where('jenis_perizinan', 'UMKU')->count();
        return view('admin.perizinan.index', $data);
    }

    public function store(Request $request)
    {
        if (\request()->ajax()) {
            Excel::import(new PerizinanImport, $request->perizinan);
            return $this->sendResponseCreate('');
        }
    }
}
