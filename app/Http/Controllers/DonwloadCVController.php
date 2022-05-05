<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DonwloadCVController extends Controller
{
    public function download()
    {
        $file = 'CV/JuancruzBetoiaCV.pdf';
        dd($file);

        echo "<h1>
        Juan C. Bertoia </h1>";

        return true;
    }
}
