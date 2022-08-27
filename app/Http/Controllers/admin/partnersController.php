<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\http\Requests\partnersRequest;
use App\Models\addPartners;
use Illuminate\Http\Request;
use App\Models\addLogo;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
use App\Traits\partnersTraits;


class partnersController extends Controller
{


    use partnersTraits;

    public function partnerPost(partnersRequest $request)
    {


        $file_name = $this->saveImage($request->photo, 'images/partners');

        addPartners::create([
            'photo' => $file_name,
        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function addPartners(){
        $partners =  addPartners::select('id', 'photo') -> get();
        $logo =  addLogo::All();
        return view('admin.addpartners', compact('partners', 'logo'));

    }


    public function delete($addPartners_id)
    {

        $addPartners = addPartners::find($addPartners_id);

        if (!$addPartners)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $addPartners->delete();

        return redirect()
            ->route('addPartners')
            ->with(['success' => __('messages.news deleted successfully')]);

    }








}



