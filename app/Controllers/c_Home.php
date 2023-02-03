<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_Home extends BaseController
{
    public function home()
    {
        $title = "Page Home";
        return view('v_home', compact('title'));
    }
}
