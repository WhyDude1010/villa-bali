<?php

namespace App\Http\Controllers;

use App\Models\Villa;
use App\Models\Settings;

class VillaController
{
    public function index()
    {
        $villa  = Villa::details();
        $seo    = Settings::get('seo');
        $footer = Settings::get('footer');
        return view('home', compact('villa', 'seo', 'footer'));
    }
}
