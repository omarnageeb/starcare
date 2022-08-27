<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\addAboutUs;
use App\Models\addSolutions;
use App\Models\addContactUs;
use Illuminate\Http\Request;
use App\Models\addLogo;

use LaravelLocalization;




class aboutUsController extends Controller
{



    public function aboutUs(){
        $aboutUs =  addAboutUs::select('id',
        'title_' . LaravelLocalization::getCurrentLocale() . ' as title',
        'photo',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description') -> get();

        $solutions =  addSolutions::select('id',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'photo',
        'icon',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') -> get();

        $contactUs =  addContactUs::All();
        $logo =  addLogo::All();
        return view('front.aboutUs', compact('aboutUs', 'solutions', 'contactUs', 'logo'));

    }



}



