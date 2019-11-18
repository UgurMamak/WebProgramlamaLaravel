<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\DuyuruModel;
use App\Models\DilekModel;
use Illuminate\Support\Facades\Hash;

use App\User;

class IslemlerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //Oturum açmadan bu sayfadaki işlemler çalışmaz.
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

//Sisteme kayıtlı olan kişilerin yapabilceği işlemlerin çalışabilmesi için gerekli olan fonksiyonları barındırır.
    
     public function FnkDuyuruEkle2(Request $request)
     {
            $sonuc="Duyuru Ekleme Başarısız";
            $kutu="hata"; //kutu değişkenini blade.php sayfasında hangi classı kullanacağımızı belirlemek için kullandık
            //Sayfadan textler girilen bilgileri request ile alıyoruz.
            $baslik=$request->TxtBaslik;
            $metin=$request->TxtDuyuru;

            //DuyuruModel sayfasından bir nesne oluşturuyoruz. ve veritabanındaki sütunlara erişiyoruz.
            $Duyuru=new DuyuruModel();
            $Duyuru->Baslik=$baslik;
            $Duyuru->Aciklama=$metin;   

            if($Duyuru->save())//Kayıt işleminin yapılıp yapılmadığını kontrol ediyoruz.
            {
                $sonuc="Duyuru Eklendi.";
                $kutu="onay";
            }
            return view('layouts.DuyuruEklemePaneli',compact('sonuc','kutu'));  
     } 

            public function FnkProfilGuncelle(Request $request)
            {
                $kutu="hata";
                $sonuc='Güncelleme Başarısız';
                $Ad=$request->TxtAd;
                $Soyad=$request->TxtSoyad;
                $mail=$request->TxtEmail;
                $Telefon=$request->TxtTelefon;
                $yenipar=$request->TxtYeniParola;
                $yenipartek=$request->TxtYeniParolaTek;

                if($yenipar==$yenipartek)
                {
                    $Guncelle=User::find(Auth::User()->id);
                    $Guncelle->name=$Ad;
                    $Guncelle->surname=$Soyad;
                    $Guncelle->email=$mail;
                    $Guncelle->Telefon=$Telefon;
                    $sifreli=Hash::make($yenipar);
                    $Guncelle->password=$sifreli;
                    if($Guncelle->save())
                    {$sonuc='Güncelleme Başarılı';$kutu="onay";}
                }
                else{$sonuc="Şifreler Eşleşmiyor.";}

                return view('layouts.profile',compact('sonuc','kutu'));
            }


        
      
}
