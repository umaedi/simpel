<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $data['title'] = 'Layanan';
        return view('frontend.layanan.index', $data);
    }
}
