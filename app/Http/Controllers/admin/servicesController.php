<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\http\Requests\servicesRequest;
use App\Models\addServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
use App\Traits\servicesTraits;
use App\Models\addLogo;


class servicesController extends Controller
{


    use servicesTraits;

    public function addServicesPost(servicesRequest $request)
    {


        $file_name = $this->saveImage($request->photo, 'images/services');

        addServices::create([
            'photo' => $file_name,
            'title_ar' => $request -> title_ar,
            'title_en' => $request -> title_en,
            'details_ar' => $request -> details_ar,
            'details_en' => $request -> details_en,
        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }

    public function addServices(){
        $services =  addServices::select('id', 'photo', 'title_ar', 'title_en', 'details_en', 'details_ar') -> get();
        $logo =  addLogo::All();
        return view('admin.addServices', compact('services', 'logo'));

    }


    public function delete($addServices_id)
    {

        $addServices = addServices::find($addServices_id);

        if (!$addServices)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $addServices->delete();

        return redirect()
            ->route('addServices')
            ->with(['success' => __('messages.news deleted successfully')]);

    }




    public function editServices($addServices_id)
    {

        // addNews::findOrFail($news_id);
        $addServices = addServices::find($addServices_id);  // search in given table id only
        if (!$addServices)
            return redirect()->back();

        $services = addServices::all()->find($addServices_id);
        $logo =  addLogo::All();
        return view('admin.editServices', compact('services', 'logo'));

    }


    public function UpdateServices(servicesRequest $request, $addServices_id)
    {
        //validtion
        $file_name = $this->saveImage($request->photo, 'images/services');
        // chek if offer exists

        $addServices = addServices::find($addServices_id);
        if (!$addServices)
            return redirect()->back();

        //update data

        $addServices->update([
            'photo' => $file_name,
            'title_ar' => $request -> title_ar,
            'title_en' => $request -> title_en,
            'details_ar' => $request -> details_ar,
            'details_en' => $request -> details_en,
        ]);



        return redirect()->back()->with(['success' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }




}



