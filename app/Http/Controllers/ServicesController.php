<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ServicesController extends Controller
{
    public function index()
    {
        $lang = \Lang::getLocale();
        $data['languages'] = Language::get();
        $data['services'] = Services::get();
        return view('backend.pages.services.list', $data);
    }
    public function add()
    {
        $data['services'] = new Services();
        $data['languages'] = Language::get();
        return view('backend.pages.services.form', $data);
    }
    public function insert(Request $request)
    {   $request->validate([
            'service_name' => 'required',
            'image' => 'required',
            'service_desc' => 'required',
            'lang_code' => 'required',
        ]);
        $services = new Services;
        $services->name = $request->service_name;
        $services->image_path = $request->file('image')->store('images' , 'public');
        $services->desc = $request->service_desc;
        $services->lang_code = $request->lang_code;
        if ($services->save()) {
            alert()->success('Başarılı','Kaydınız başarılı bir şekilde eklenmiştir.');  
        }
        else
            alert()->error('Malesef','Kaydınız eklenirken bir sorun oluştu.');  
        return redirect()->back();
    }
    public function edit($id)
    {
        $data['services'] = Services::find($id);
        $data['languages'] = Language::get();
        return view('backend.pages.services.form', $data);
    }

    public function update(Request $request, $id)
    {
        $service = Services::find($id);
        $service->name = $request->service_name;
        $service->desc = $request->service_desc;
        if (!empty($request->image)) {
            $path = public_path('storage/' . $service->image_path);
            if (file_exists($path)) {
                unlink($path);
            }
            $service->image_path = $request->file('image')->store('images' , 'public');
        }
        $service->lang_code = $request->lang_code;
        if ($service->save()) {
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
            //$service = Services::where('id', '=', $id);
            $service = Services::find($id);
                if ($service->count() > 0) {
                    if ($service->delete()) {
                        $path = public_path('storage/' . $service->image_path);
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
