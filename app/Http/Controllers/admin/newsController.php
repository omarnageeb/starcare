<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\http\Requests\newsRequest;
use App\Models\addNews;
use Illuminate\Http\Request;
use App\Models\addLogo;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
use App\Traits\newsTraits;


class newsController extends Controller
{


    use newsTraits;

    public function newsStore(newsRequest $request)
    {


        $file_name = $this->saveImage($request->photo, 'images/news');

        addNews::create([
            'photo' => $file_name,
            'name_ar' => $request -> name_ar,
            'name_en' => $request -> name_en,
            'date' => $request -> date,
            'details_ar' => $request -> details_ar,
            'details_en' => $request -> details_en,
        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function addNews(){
        $logo =  addLogo::All();
        $news =  addNews::select('id', 'name_ar', 'name_en', 'date', 'photo', 'details_ar', 'details_en') -> get();
        return view('admin.addNews', compact('news', 'logo'));

    }


    public function delete($addNews_id)
    {

        $addNews = addNews::find($addNews_id);

        if (!$addNews)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $addNews->delete();

        return redirect()
            ->route('addNews')
            ->with(['success' => __('messages.news deleted successfully')]);

    }


    public function editNews($news_id)
    {

        // addNews::findOrFail($news_id);
        $addNews = addNews::find($news_id);  // search in given table id only
        if (!$addNews)
            return redirect()->back();

        $news = addNews::all()->find($news_id);
        $logo =  addLogo::All();
        return view('admin.editNews', compact('news', 'logo'));

    }


    public function UpdateNews(newsRequest $request, $news_id)
    {
        //validtion
        $file_name = $this->saveImage($request->photo, 'images/news');
        // chek if offer exists

        $addNews = addNews::find($news_id);
        if (!$addNews)
            return redirect()->back();

        //update data

        $addNews->update([
            'photo' => $file_name,
            'name_ar' => $request -> name_ar,
            'name_en' => $request -> name_en,
            'date' => $request -> date,
            'details_ar' => $request -> details_ar,
            'details_en' => $request -> details_en,
        ]);



        return redirect()->back()->with(['success' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }




}



