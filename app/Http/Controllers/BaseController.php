<?php

namespace App\Http\Controllers;
use App;
use Cookie;
use Session;
use App\Models\About;
use App\Models\Contact;
use App\Models\Language;
use App\Models\Link;
use App\Models\Services;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(Request $request , $locale)
    {
        //Cookie::queue('locale', $locale, 5);
        if (! in_array($locale, ['de', 'tr'])) {
            abort(400);
        }
        App::setlocale($locale);
        return view('front-end.index');
        //
    }
    public function services(Request $request , $locale)
    {
        if (! in_array($locale, ['de', 'tr'])) {
            abort(400);
        }
        App::setlocale($locale);
        $data['services'] = Services::where('lang_code', $locale)->get();
        return view('front-end.services', $data);
    }
    public function links(Request $request , $locale)
    {
        if (! in_array($locale, ['de', 'tr'])) {
            abort(400);
        }
        App::setlocale($locale);
        return view('front-end.links');
    }
    public function about(Request $request , $locale)
    {
        if (! in_array($locale, ['de', 'tr'])) {
            abort(400);
        }
        App::setlocale($locale);
        return view('front-end.about');
    }
    public function contact(Request $request , $locale)
    {
        if (! in_array($locale, ['de', 'tr'])) {
            abort(400);
        }
        App::setlocale($locale);
        return view('front-end.contact');
    }
}
