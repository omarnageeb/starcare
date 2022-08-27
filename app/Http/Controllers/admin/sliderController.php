<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\http\Requests\sliderRequest;
use App\Models\addSlider;
use Illuminate\Http\Request;
use App\Models\addLogo;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
use App\Traits\sliderTraits;


class sliderController extends Controller
{


    use sliderTraits;

    public function sliderPost(sliderRequest $request)
    {


        $file_name = $this->saveImage($request->photo, 'images/slider');

        addSlider::create([
            'photo' => $file_name,
            'description_ar' => $request -> description_ar,
            'description_en' => $request -> description_en,
        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function addSlider(){
        $slider =  addSlider::select('id', 'photo', 'description_en', 'description_ar') -> get();
        $logo =  addLogo::All();
        return view('admin.addSlider', compact('slider', 'logo'));

    }


    public function delete($addSlider_id)
    {

        $addSlider = addSlider::find($addSlider_id);

        if (!$addSlider)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $addSlider->delete();

        return redirect()
            ->route('addSlider')
            ->with(['success' => __('messages.news deleted successfully')]);

    }




    public function editSlider($slider_id)
    {

        // addNews::findOrFail($news_id);
        $addSlider = addSlider::find($slider_id);  // search in given table id only
        if (!$addSlider)
            return redirect()->back();

        $slider = addSlider::all()->find($slider_id);
        $logo =  addLogo::All();
        return view('admin.editSlider', compact('slider', 'logo'));

    }


    public function UpdateSlider(sliderRequest $request, $slider_id)
    {
        //validtion
        $file_name = $this->saveImage($request->photo, 'images/slider');
        // chek if offer exists

        $addSlider = addSlider::find($slider_id);
        if (!$addSlider)
            return redirect()->back();

        //update data

        $addSlider->update([
            'photo' => $file_name,
            'description_ar' => $request -> description_ar,
            'description_en' => $request -> description_en,
        ]);



        return redirect()->back()->with(['success' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }




}



