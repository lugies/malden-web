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
        $request->validate([
            'mail' => 'required',
            'phone' => 'required',
            'phone_2' => 'required',
            'adress' => 'required',
            'adress2' => 'required',
            'info' => 'required',
        ],[
            'mail.required' => 'Lütfen boş bırakmayınız',
            'phone.required' => 'Lütfen boş bırakmayınız',
            'phone_2.required' => 'Lütfen boş bırakmayınız',
            'adress.required' => 'Lütfen boş bırakmayınız',
            'adress2.required' => 'Lütfen boş bırakmayınız',
            'info.required' => 'Lütfen boş bırakmayınız',
        ]);
        if (isset($request->map)) {
            $text = strstr($request->map, '@');
            $kesilmis = substr($text, 1, 25);
            $dizi = explode (",",$kesilmis);
            $contact = Contact::updateOrCreate([
                //Add unique field combo to match here
                //For example, perhaps you only want one entry per user:
                'lang_code'   => $request->lang_code,
            ],[
                'mail'     => $request->mail,
                'phone' => $request->phone,
                'phone_2'    => $request->phone_2,
                'adress'   => $request->adress,
                'adress2'       => $request->adress2,
                'info'   => $request->info,
                'latitude'    => $dizi[0],
                'longitude'    => $dizi[1]
            ]);
        }
        else{
            $contact = Contact::updateOrCreate([
                //Add unique field combo to match here
                //For example, perhaps you only want one entry per user:
                'lang_code'   => $request->lang_code,
            ],[
                'mail'     => $request->mail,
                'phone' => $request->phone,
                'phone_2'    => $request->phone_2,
                'adress'   => $request->adress,
                'adress2'       => $request->adress2,
                'info'   => $request->info
            ]);
        }
        
            /*
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
            */

        if ($contact->save()) {
            alert()->success('Başarılı','Kaydınız başarılı bir şekilde güncellenmiştir.');  
        }
        else
            alert()->error('Malesef','Kaydınız güncellenirken bir sorun oluştu.');  
        return redirect()->back();
    }
}
