<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\addLogo;

class DashboardController extends Controller
{
    public function indexAdmin () {
        $logo =  addLogo::All();
        return view('admin.dashboard', compact('logo'));

    }
}
