<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Aduan;
use Illuminate\Http\Request;
use App\Services\AduanService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Response as Controller;
use App\Models\Opd;

class PengaduanController extends Controller
{
    protected $aduan;
    public function __construct(Aduan $aduan)
    {
        $this->aduan = new AduanService($aduan);
    }
    public function index()
    {
        if (\request()->ajax()) {
            $opd = Opd::all();
            return $this->sendResponseOk($opd);
        }
        $data['title'] = 'Layanan Pengaduan';
        return view('frontend.pengaduan.index', $data);
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->except('_token');

            DB::beginTransaction();
            try {
                $this->aduan->store($data);
            } catch (\Throwable $th) {
                DB::rollBack();
                return $this->sendResponseError($th);
            }

            DB::commit();
            return $this->sendResponseCreate($data);
        }
    }
}
