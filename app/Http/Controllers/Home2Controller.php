<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DilekModel;
use App\Models\DuyuruModel;

class Home2Controller extends Controller
{
    public function Fnkindex() //AnaSayfa 
    {
        $Duyurular=DuyuruModel::all();
    	return view('layouts.index')->with('Duyurular',$Duyurular);
    }



    //Oturum Açmadan açılabilecek sayfalar home2controllerda tanımlanacak.
    public function FnkBosSayfa() 
    {
    	return view('layouts.BosSayfa');
    }

      public function FnkDilekSikayet() 
    {
    	return view('layouts.DilekSikayet');
    } 


         public function FnkDilekSikayetEkle(Request $request)
     {
            $sonuc="İletiniz Gönderilemedi.";
            $kutu="hata";
            //Sayfadan textler girilen bilgileri request ile alıyoruz.
            $AdSoyad=$request->TxtAdSoyad;
            $istek=$request->TxtDilek;

            //DilekModel sayfasından bir nesne oluşturuyoruz. ve veritabanındaki sütunlara erişiyoruz.
            $Dilek=new DilekModel();
            $Dilek->AdSoyad=$AdSoyad;
            $Dilek->istek=$istek;   

            if($Dilek->save())//Kayıt işleminin yapılıp yapılmadığını kontrol ediyoruz.
            {
                $sonuc="İletiniz Gönderildi.";
                $kutu="onay";
            }
            return view('layouts.DilekSikayet',compact('sonuc','kutu')); 
     }


}
