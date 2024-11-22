<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function tentangkami(): View
    {
        return view('konten.tentangkami');
    }
}
