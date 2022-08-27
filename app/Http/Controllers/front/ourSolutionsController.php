<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\addSolutions;
use Illuminate\Http\Request;
use App\Models\addContactUs;
use App\Models\addLogo;
use LaravelLocalization;





class ourSolutionsController extends Controller
{



    public function solutions(){
        $solutions =  addSolutions::select('id',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'photo',
        'icon',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') -> get();

        $contactUs =  addContactUs::All();
        $logo =  addLogo::All();
        return view('front.Solutions', compact('solutions', 'contactUs', 'logo'));

    }



    public function infoSolutions(addSolutions $addSolutions_id)

    {
        // dd(addSolutions::find($addSolutions_id));
        // dd(LaravelLocalization::getCurrentLocale());
        $solutions = addSolutions::select('id',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'photo',
        'icon',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') ->find($addSolutions_id)->toArray();

        $solutions = addSolutions::select('id',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'photo',
        'icon',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') ->get();

        // dd();
        $contactUs =  addContactUs::All();
        $logo =  addLogo::All();
        return view('front.infoSolutions',compact('addSolutions_id','solutions', 'logo', 'contactUs'));
    }
}



