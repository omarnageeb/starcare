<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\addContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\addSolutions;
use App\Models\addLogo;
use LaravelLocalization;



class contactUsController extends Controller
{


/*
    public function contactUs(){
        $contactUs =  addContactUs::select('id', 'phone', 'email', 'address') -> get();
        return view('front.contactUs', compact('contactUs'));


    }

*/

    function contactUs(){


        $contactUs =  addContactUs::All();
        $solutions =  addSolutions::select('id',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'photo',
        'icon',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') -> get();
        $logo =  addLogo::All();
        return view('front.contactUs', compact('contactUs', 'solutions', 'logo'));
    }




}



