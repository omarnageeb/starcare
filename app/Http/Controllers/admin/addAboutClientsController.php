<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\http\Requests\aboutClientsRequest;
use App\Models\addAboutClients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
use App\Traits\aboutClientsTraits;
use App\Models\addLogo;


class addAboutClientsController extends Controller
{


    use aboutClientsTraits;

    public function addAboutClientPost(aboutClientsRequest $request)
    {


        $file_name = $this->saveImage($request->photo, 'images/aboutClients');

        addAboutClients::create([
            'photo' => $file_name,
            'title_ar' => $request -> title_ar,
            'title_en' => $request -> title_en,
            'details_ar' => $request -> details_ar,
            'details_en' => $request -> details_en,
        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }

    public function addAboutClient(){
        $aboutClient =  addAboutClients::select('id', 'photo', 'title_ar', 'title_en', 'details_en', 'details_ar') -> get();
        $logo =  addLogo::All();
        return view('admin.addAboutClients', compact('aboutClient', 'logo'));

    }


    public function delete($addAboutClients_id)
    {

        $addAboutClients = addAboutClients::find($addAboutClients_id);

        if (!$addAboutClients)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $addAboutClients->delete();

        return redirect()
            ->route('addAboutClient')
            ->with(['success' => __('messages.news deleted successfully')]);

    }




    public function editAboutClient($addAboutClients_id)
    {

        // addNews::findOrFail($news_id);
        $addAboutClients = addAboutClients::find($addAboutClients_id);  // search in given table id only
        if (!$addAboutClients)
            return redirect()->back();

        $aboutClient = addAboutClients::all()->find($addAboutClients_id);
        $logo =  addLogo::All();
        return view('admin.editAboutClients', compact('aboutClient', 'logo'));

    }


    public function UpdateAboutClient(aboutClientsRequest $request, $addAboutClients_id)
    {
        //validtion
        $file_name = $this->saveImage($request->photo, 'images/aboutClients');
        // chek if offer exists

        $addAboutClients = addAboutClients::find($addAboutClients_id);
        if (!$addAboutClients)
            return redirect()->back();

        //update data

        $addAboutClients->update([
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



