<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\http\Requests\solutionsRequest;
use App\Models\addSolutions;
use Illuminate\Http\Request;
use App\Models\addLogo;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
use App\Traits\solutionsTraits;


class solutionsController extends Controller
{


    use solutionsTraits;

    public function solutionsStore(solutionsRequest $request)
    {


        $photo_name = $this->saveImage($request->photo, 'images/solutions');
        $icon_name = $this->saveIcon($request->icon, 'images/solutions');

        addSolutions::create([
            'photo' => $photo_name,
            'icon' => $icon_name,
            'name_ar' => $request -> name_ar,
            'name_en' => $request -> name_en,
            'details_ar' => $request -> details_ar,
            'details_en' => $request -> details_en,
        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function addSolutions(){
        $solutions =  addSolutions::select('id', 'name_ar', 'name_en', 'photo', 'icon', 'details_ar', 'details_en') -> get();
        $logo =  addLogo::All();
        return view('admin.addSolutions', compact('solutions', 'logo'));

    }


    public function delete($addSolutions_id)
    {

        $addSolutions = addSolutions::find($addSolutions_id);

        if (!$addSolutions)
            return redirect()->back()->with(['error' => __('messages.solutions not exist')]);

        $addSolutions->delete();

        return redirect()
            ->route('addSolutions')
            ->with(['success' => __('messages.solutions deleted successfully')]);

    }






    public function editSolutions($solutions_id)
    {

        // addNews::findOrFail($news_id);
        $addSolutions = addSolutions::find($solutions_id);  // search in given table id only
        if (!$addSolutions)
            return redirect()->back();

        $solutions = addSolutions::all()->find($solutions_id);
        $logo =  addLogo::All();
        return view('admin.editSolutions', compact('solutions', 'logo'));

    }


    public function UpdateSolutions(solutionsRequest $request, $solutions_id)
    {
        //validtion
        $photo_name = $this->saveImage($request->photo, 'images/solutions');
        $icon_name = $this->saveIcon($request->icon, 'images/solutions');
        // chek if offer exists

        $addSolutions = addSolutions::find($solutions_id);
        if (!$addSolutions)
            return redirect()->back();

        //update data

        $addSolutions->update([
            'photo' => $photo_name,
            'icon' => $icon_name,
            'name_ar' => $request -> name_ar,
            'name_en' => $request -> name_en,
            'details_ar' => $request -> details_ar,
            'details_en' => $request -> details_en,
        ]);



        return redirect()->back()->with(['success' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }











}



