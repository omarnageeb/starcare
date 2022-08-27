<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\http\Requests\contactUsRequest;
use App\Models\addContactUs;
use Illuminate\Http\Request;
use App\Models\addLogo;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;


class contactUsController extends Controller
{




    public function ContactUsPost(contactUsRequest $request)
    {




        addContactUs::create([
            'phone' => $request -> phone,
            'email' => $request -> email,
            'address' => $request -> address,
        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function addContactUs(){
        $contactUs =  addContactUs::select('id', 'phone', 'email', 'address') -> get();
        $logo =  addLogo::All();
        return view('admin.addContactUs', compact('contactUs', 'logo'));

    }


    public function delete($addContactUs_id)
    {

        $addContactUs = addContactUs::find($addContactUs_id);

        if (!$addContactUs)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $addContactUs->delete();

        return redirect()
            ->route('addContactUs')
            ->with(['success' => __('messages.news deleted successfully')]);

    }














    public function editContactUs($ContactUs_id)
    {

        // addNews::findOrFail($news_id);
        $addContactUs = addContactUs::find($ContactUs_id);  // search in given table id only
        if (!$addContactUs)
            return redirect()->back();

        $contactUs = addContactUs::all()->find($ContactUs_id);
        $logo =  addLogo::All();
        return view('admin.editContactUs', compact('contactUs', 'logo'));

    }


    public function UpdateContactUs(contactUsRequest $request, $ContactUs_id)
    {
        //validtion
        // chek if offer exists

        $addContactUs = addContactUs::find($ContactUs_id);
        if (!$addContactUs)
            return redirect()->back();

        //update data

        $addContactUs->update($request->all());



        return redirect()->back()->with(['success' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }




}



