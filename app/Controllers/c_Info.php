<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_Info extends BaseController
{
    public function informasi()
    {
        $title = "Page Informasi";
        return view('v_informasi', compact('title'));
    }
}
