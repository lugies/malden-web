<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;
class ContactController extends Controller
{
    public function index()
    {
        $lang = \Lang::getLocale();
        $data['languages'] = Language::get();
        $data['contacts'] = Contact::get();
        return view('backend.pages.contact.list', $data);
    }
    public function update(Request $request, $id)
    {        
        $contact = Contact::find($id);
        $contact->mail = $request->mail;
        $contact->phone = $request->phone;
        $contact->phone_2 = $request->phone_2;
        $contact->adress = $request->adress;
        $contact->adress2 = $request->adress2;
        $contact->info = $request->info;
        $contact->lang_code = $request->lang_code;
        
        $text = strstr($request->map, '@');
        $kesilmis = substr($text, 1, 25);
        $dizi = explode (",",$kesilmis);
        $contact->latitude = $dizi[0];
        $contact->longitude = $dizi[1];
        
        if ($contact->save()) {
            alert()->success('Başarılı','Kaydınız başarılı bir şekilde güncellenmiştir.');  
        }
        else
            alert()->error('Malesef','Kaydınız güncellenirken bir sorun oluştu.');  
        return redirect()->back();
    }
}
