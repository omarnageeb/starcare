<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\http\Requests\logoRequest;
use App\Models\addLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
use App\Traits\logoTraits;


class LogoController extends Controller
{


    use logoTraits;

    public function addlogoPost(logoRequest $request)
    {


        $file_name = $this->saveImage($request->photo, 'images/logo');

        addLogo::create([
            'photo' => $file_name,
        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function addLogo(){
        $logo =  addLogo::select('id', 'photo') -> get();
        return view('admin.addLogo', compact('logo'));

    }


    public function delete($addLogo_id)
    {

        $addLogo = addLogo::find($addLogo_id);

        if (!$addLogo)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $addLogo->delete();

        return redirect()
            ->route('addlogo')
            ->with(['success' => __('messages.news deleted successfully')]);

    }




}



