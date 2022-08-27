<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\addslider;
use App\Models\addPartners;
use App\Models\addNews;
use App\Models\addSolutions;
use App\Models\addClients;
use App\Models\addLogo;
use App\Models\addContactUs;
use App\Models\addAboutUs;
use App\Models\addServices;
use App\Models\addAboutClients;
use Illuminate\Support\Facades\DB;
use LaravelLocalization;



class homeController extends Controller
{
    function index(){

        $partners =  addPartners::all();

        $slider =  addSlider::select('id',
        'photo',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description') -> get();

        $news =  addNews::select('id',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'photo',
        'date',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') -> get();

        $logo =  addLogo::all();

        $solutions =  addSolutions::select('id',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'photo',
        'icon',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') -> get();

        $clients =  addClients::select('id',
        'photo',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description') -> get();

        $contactUs =  addContactUs::All();

        $aboutClient =  addAboutClients::select('id',
        'title_' . LaravelLocalization::getCurrentLocale() . ' as title',
        'photo',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') -> get();


        $services =  addServices::select('id',
        'title_' . LaravelLocalization::getCurrentLocale() . ' as title',
        'photo',
        'details_' . LaravelLocalization::getCurrentLocale() . ' as details') -> get();

        $aboutUs =  addAboutUs::select('id',
        'title_' . LaravelLocalization::getCurrentLocale() . ' as title',
        'photo',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description') -> get();

        return view('front.home', compact('partners', 'slider', 'news', 'solutions', 'clients', 'logo', 'services', 'aboutClient', 'contactUs', 'aboutUs'));


    }





}

/*

 $news =  addNews::all()-> get();

$slider= DB::table('slider')
-> get();
return view('front.home', ['slider'=>$slider]);



$partners= DB::table('partners')
-> get();
return view('front.home', ['partners'=>$partners]);

*/
