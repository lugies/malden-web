<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class LinkController extends Controller
{
    public function index()
    {
        $lang = \Lang::getLocale();
        $data['languages'] = Language::get();
        $data['links'] = Link::get();
        return view('backend.pages.links.list', $data);
    }
    public function add()
    {
        $data['links'] = new Link();
        $data['languages'] = Language::get();
        return view('backend.pages.links.form', $data);
    }
    public function insert(Request $request)
    {   
        $request->validate([
        'image' => 'required',
        'link_url' => 'required',
        'lang_code' => 'required',
        ],[
            
            'link_url.required' => 'Lütfen boş bırakmayınız',
            'lang_code.required' => 'Lütfen boş bırakmayınız',
        ]);
        $link = new Link;
        $link->image_path = $request->file('image')->store('images' , 'public');
        $link->url = $request->link_url;
        $link->lang_code = $request->lang_code;
        if ($link->save()) {
            alert()->success('Başarılı','Kaydınız başarılı bir şekilde eklenmiştir.');  
        }
        else
            alert()->error('Malesef','Kaydınız eklenirken bir sorun oluştu.');  
        return redirect()->back();
    }
    public function edit($id)
    {
        $data['links'] = Link::find($id);
        $data['languages'] = Language::get();
        return view('backend.pages.links.form', $data);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required',
            'link_url' => 'required',
            'lang_code' => 'required',
        ],[
            'link_url.required' => 'Lütfen boş bırakmayınız',
            'lang_code.required' => 'Lütfen boş bırakmayınız',
        ]);
        $link = Link::find($id);
        $link->url = $request->link_url;
        if (!empty($request->image)) {
            $path = public_path('storage/' . $link->image_path);
            if (file_exists($path)) {
                unlink($path);
            }
            $link->image_path = $request->file('image')->store('images' , 'public');
        }
        $link->lang_code = $request->lang_code;
        if ($link->save()) {
            alert()->success('Başarılı','Kaydınız başarılı bir şekilde güncellenmiştir.');  
        }
        else
            alert()->error('Malesef','Kaydınız güncellenirken bir sorun oluştu.');  
        return redirect()->back();
    }
    public function delete($id)
    {
        
        $data = array();
        try {
            //$link = Services::where('id', '=', $id);
            $link = Link::find($id);
                if ($link->count() > 0) {
                    if ($link->delete()) {
                        $path = public_path('storage/' . $link->image_path);
                        if (file_exists($path)) {
                            unlink($path);
                            $data['success'] = true;
                        }
                        $data['success'] = true;
                        $data['message'] = "Servis kaydı başarıyla silinmiştir.";
                    } else {
                        $data['success'] = false;
                        $data['message'] = "Kayıt silerken bir problem oluştu.Kontrol edip tekrar deneyiniz";
                    }
                } else {
                    $data['success'] = false;
                    $data['message'] = "Kayıt silerken bir problem oluştu.Kontrol edip tekrar deneyiniz";
                }
        } catch (\Exception $ex) {
            $data['success'] = false;
            $data['message'] = $ex->getMessage();
        }
        return response()->json($data);
    }
}
