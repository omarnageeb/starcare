<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\http\Requests\clientsRequest;
use App\Models\addClients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
use App\Traits\clientsTraits;
use App\Models\addLogo;


class clientsController extends Controller
{


    use clientsTraits;

    public function addClientsPost(clientsRequest $request)
    {


        $file_name = $this->saveImage($request->photo, 'images/clients');

        addClients::create([
            'photo' => $file_name,
            'description_ar' => $request -> description_ar,
            'description_en' => $request -> description_en,
        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function addClients(){
        $clients =  addClients::select('id', 'photo', 'description_en', 'description_ar') -> get();
        $logo =  addLogo::All();
        return view('admin.addClients', compact('clients', 'logo'));

    }


    public function delete($addClients_id)
    {

        $addClients = addClients::find($addClients_id);

        if (!$addClients)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $addClients->delete();

        return redirect()
            ->route('addClients')
            ->with(['success' => __('messages.news deleted successfully')]);

    }




    public function editClients($clients_id)
    {

        // addNews::findOrFail($news_id);
        $addClients = addClients::find($clients_id);  // search in given table id only
        if (!$addClients)
            return redirect()->back();

        $clients = addClients::all()->find($clients_id);
        $logo =  addLogo::All();
        return view('admin.editClients', compact('clients', 'logo'));

    }







    public function UpdateClients(clientsRequest $request, $clients_id)
    {
        //validtion
        $file_name = $this->saveImage($request->photo, 'images/clients');
        // chek if offer exists

        $addClients = addClients::find($clients_id);
        if (!$addClients)
            return redirect()->back();

        //update data

        $addClients->update([
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



