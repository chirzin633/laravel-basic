<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class SiswaController extends Controller
{
    //
    public function about()
    {
        return view('pages.about');
    }
}
