<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DonwloadCVController extends Controller
{
    public function donwload()
    {
        return Storage::download('JuanCruzBertoiaCV.pdf');
    }
}
