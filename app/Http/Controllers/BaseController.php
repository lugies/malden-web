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
    public function index(Request $request , $locale = 'de')
    {
        //Cookie::queue('locale', $locale, 5);
        if (! in_array($locale, ['de', 'tr'])) {
            $locale = 'de';
            return redirect('/');
        }
        App::setlocale($locale);
        return view('front-end.index');
        //
    }
    public function services(Request $request , $locale)
    {
        if (! in_array($locale, ['de', 'tr'])) {
            $locale = 'de';
            return redirect('/');
        }
        App::setlocale($locale);
        $data['services'] = Services::where('lang_code', $locale)->get();
        return view('front-end.services', $data);
    }
    public function links(Request $request , $locale)
    {
        if (! in_array($locale, ['de', 'tr'])) {
            $locale = 'de';
            return redirect('/');
        }
        App::setlocale($locale);
        $data['links'] = Link::where('lang_code', $locale)->get();
        return view('front-end.links', $data);
    }
    public function about(Request $request , $locale)
    {
        if (! in_array($locale, ['de', 'tr'])) {
            $locale = 'de';
            return redirect('/');
        }
        App::setlocale($locale);
        $data = About::where('lang_code', $locale)->first();
        //dd($data);
        return view('front-end.about', ['data' => $data]);
    }
    public function contact(Request $request , $locale)
    {
        if (! in_array($locale, ['de', 'tr'])) {
            $locale = 'de';
            return redirect('/');
        }
        App::setlocale($locale);
        $data['contacts'] = Contact::where('lang_code', $locale)->get();
        return view('front-end.contact', $data);
    }
    public function privacy(Request $request , $locale)
    {
        if (! in_array($locale, ['de', 'tr'])) {
            $locale = 'de';
            return redirect('/');
        }
        App::setlocale($locale);
        return view('front-end.privacy');
    }
}
