<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjekController extends Controller
{
    public function projek(): View
    {
        return view('konten.projek');
    }
}
