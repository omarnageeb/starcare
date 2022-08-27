<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\http\Requests\aboutUsRequest;
use App\Models\addAboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
use App\Traits\aboutUsTraits;
use App\Models\addLogo;


class aboutUsController extends Controller
{


    use aboutUsTraits;

    public function aboutUsPost(aboutUsRequest $request)
    {


        $file_name = $this->saveImage($request->photo, 'images/aboutUs');

        addAboutUs::create([
            'photo' => $file_name,
            'title_ar' => $request -> title_ar,
            'title_en' => $request -> title_en,
            'description_ar' => $request -> description_ar,
            'description_en' => $request -> description_en,
        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function addAboutUs(){
        $aboutUs =  addAboutUs::select('id', 'photo', 'title_ar', 'title_en', 'description_en', 'description_ar') -> get();
        $logo =  addLogo::All();
        return view('admin.addAboutUs', compact('aboutUs', 'logo'));

    }


    public function delete($addAboutUs_id)
    {

        $addAboutUs = addAboutUs::find($addAboutUs_id);

        if (!$addAboutUs)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $addAboutUs->delete();

        return redirect()
            ->route('addAboutUs')
            ->with(['success' => __('messages.news deleted successfully')]);

    }




    public function editAboutUs($aboutUs_id)
    {

        // addNews::findOrFail($news_id);
        $addAboutUs = addAboutUs::find($aboutUs_id);  // search in given table id only
        if (!$addAboutUs)
            return redirect()->back();

        $aboutUs = addAboutUs::all()->find($aboutUs_id);
        $logo =  addLogo::All();
        return view('admin.editAboutUs', compact('aboutUs', 'logo'));

    }


    public function UpdateAboutUs(aboutUsRequest $request, $aboutUs_id)
    {
        //validtion
        $file_name = $this->saveImage($request->photo, 'images/aboutUs');
        // chek if offer exists

        $addAboutUs = addAboutUs::find($aboutUs_id);
        if (!$addAboutUs)
            return redirect()->back();

        //update data

        $addAboutUs->update([
            'photo' => $file_name,
            'title_ar' => $request -> title_ar,
            'title_en' => $request -> title_en,
            'description_ar' => $request -> description_ar,
            'description_en' => $request -> description_en,
        ]);



        return redirect()->back()->with(['success' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }




}



