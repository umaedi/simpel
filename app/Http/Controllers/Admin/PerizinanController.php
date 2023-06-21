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
        $perizinan = $this->perizinan->Query();
        if (\request()->ajax()) {
            // $data = $this->perizinan->Query()->
        }

        $data['persayaratan_dasar'] = $perizinan->where('jenis_perizinan', 'Persyarat Dasar')->count();
        $data['sertifikat_standar'] = $perizinan->where('jenis_perizinan', 'Sertifikat Standar')->count();
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
