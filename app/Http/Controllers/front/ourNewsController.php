<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\addNews;
use App\Models\addSolutions;
use Illuminate\Http\Request;
use App\Models\addContactUs;
use App\Models\addLogo;
use LaravelLocalization;






class ourNewsController extends Controller
{





    public function news(){
        $news =  addNews::select('id',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'photo',
        'date',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') -> get();

        $solutions =  addSolutions::select('id',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'photo',
        'icon',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') -> get();

        $contactUs =  addContactUs::All();
        $logo =  addLogo::All();
        return view('front.news', compact('news', 'solutions', 'contactUs', 'logo'));

    }



    public function infoNews(addNews $addNews_id)

    {
        $news =  addNews::select('id',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'photo',
        'date',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') ->find($addNews_id)->toArray();

        $news =  addNews::select('id',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'photo',
        'date',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') ->get();



        $solutions =  addSolutions::select('id',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'photo',
        'icon',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') -> get();

        $contactUs =  addContactUs::All();
        $logo =  addLogo::All();

        return view('front.infoNews',compact('addNews_id', 'solutions', 'logo', 'contactUs', 'news'));
    }




}



