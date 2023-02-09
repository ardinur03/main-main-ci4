<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_Home extends BaseController
{
    public function home()
    {
        $title = "Home Page";
        return view('v_Home', compact('title'));
    }

    public function merge()
    {
        return view('layouts/a')
            . view('layouts/b')
            . view('layouts/c');
    }
}
