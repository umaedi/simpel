<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Exports\PerizinanExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return Excel::download(new PerizinanExport($request->data), 'Data.xlsx');
    }
}
