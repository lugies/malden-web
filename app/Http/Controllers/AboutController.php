<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\About;
use RealRashid\SweetAlert\Facades\Alert;
class AboutController extends Controller
{
    public function index()
    {
        $lang = \Lang::getLocale();
        $data['languages'] = Language::get();
        $data['abouts'] = About::get();
        return view('backend.pages.about.list', $data);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'desc' => 'required',
            'lang_code' => 'required',
        ],[
            'desc.required' => 'Lütfen boş bırakmayınız',
            'lang_code.required' => 'Lütfen boş bırakmayınız',
        ]);
        $about = About::find($id);
        $about->desc = $request->desc;
        $about->lang_code = $request->lang_code;
        if (!empty($request->image)) {
            $path = public_path('storage/' . $about->image_path);
            if (file_exists($path)) {
                unlink($path);
            }
            $about->image_path = $request->file('image')->store('images' , 'public');
        }
        if ($about->save()) {
            alert()->success('Başarılı','Kaydınız başarılı bir şekilde güncellenmiştir.');  
        }
        else
            alert()->error('Malesef','Kaydınız güncellenirken bir sorun oluştu.');  
        return redirect()->back();
    }
}
