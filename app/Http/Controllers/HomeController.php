<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB;
use App\Models\DuyuruModel;
use App\Models\DilekModel;
use App\User;
use App\Models\GeciciModel;

class HomeController extends Controller
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


    
        public function index()
        {      
            $kim;        
            $deger=Auth::user()->email;//Girilen mail adresi deger değişkenine atandı.
            $Hesaplar=User::all();// veritabanındaki tüm verileri çeker.       
            foreach ($Hesaplar as $hesap)
            {
                $mail=$hesap->email;
                $tur=$hesap->role_id;
                if($mail==$deger && $tur=='1')
                    {
                        $kim='home';
                        $Dilekler=DilekModel::all();
                        return view($kim)->with('Dilekler',$Dilekler);
                        break;
                    }

                else if($mail==$deger && $tur=='2')
                    {
                        $kim='home2';
                        $Duyurular=DuyuruModel::all();//Eğer kulllanıcı girişi yapıldıysa duyurular veritabanından çekilir
                        return view($kim)->with('Duyurular',$Duyurular);
                        break;
                    }
                else {$kim='layouts.profile';}                
            }
            return view($kim);  
        }
        
    public function FnkProfil()
     { return view('layouts.profile');}

     public function FnkKullaniciProfil()
     { 
        return view('layouts.profileKullanici');
    }

     //GET işlemi post olayı kullanılsa bile kullanılmak zorunda sayfayı çağırma işlemi yapılıyor.
      public function FnkDuyuruEkle() 
     { return view('layouts.DuyuruEklemePaneli');}



         public function FnkHesapListele()
        { 
            $Hesaplar=User::all();
            return view('layouts.HesapTakip')->with('Hesaplar',$Hesaplar);
        }

         public function FnkHesapGuncelle1(Request $request)
        { 
            $Hesaplar=User::all();

            //blade.phpden gelen id ye göre vt den verileri çekip değişkene attık.
            $id=$request->kisiler;//gelen idye göre vt den bilgileri çekeceğiz.
            $secili=User::find($id);
            $ad=$secili->name;
            $soyad=$secili->surname; 
            $email=$secili->email;           
            $telefon=$secili->Telefon;
            $yetki=$secili->role_id;


            //Bilgileri geçici olarak veritabanında tuttuk.
            $GeciciEkle=new GeciciModel();
            $GeciciEkle->ad=$ad;
            $GeciciEkle->soyad=$soyad;
            $GeciciEkle->mail=$email;
            $GeciciEkle->telefon=$telefon;
            $GeciciEkle->kulid=$id;
            $GeciciEkle->save();

            if($yetki=="2")$yetki="Kullanıcı";
            else $yetki="Admin";
         
            return view('layouts.HesapTakip',compact('Hesaplar','ad','soyad','yetki','telefon','email'));
        }
        
        public function FnkHesapGuncelle2(Request $request)
        {
            $kutu="hata";
            $Hesaplar=User::all();
            //tblgecici tablosunda tuttuğumuz bilgileri burada kullandık.
            $GeciciBilgi = DB::table('tblgecici')->select('*')->get();
            foreach ($GeciciBilgi as $bilgi)
            {
            $kulid=$bilgi->kulid;
            $ad=$bilgi->ad;
            $soyad=$bilgi->soyad;
            $email=$bilgi->mail;
            $telefon=$bilgi->telefon;
            }
         
            $sonuc="Yetki değiştirme başarısız.";
            $yetkitur=$request->yetki;

            if($yetkitur=="Kullanıcı")$yetkitur="2"; else $yetkitur="1";
            $Guncelle=User::find($kulid);
            $Guncelle->role_id=$yetkitur;
            if($Guncelle->save())
            {$sonuc="Yetki değiştirme başarılı";$kutu="onay";}


           // tblgecici tablosundaki veriler artık işimize yaramayacağı için siliyoruz.
            DB::table('tblgecici')->delete();

            
           if($yetkitur=="2")$yetkitur="Kullanıcı"; else $yetkitur="Admin";

 

     return view('layouts.HesapTakip',compact('Hesaplar','ad','soyad','yetkitur','telefon','email','sonuc','kutu'));
        }  
}
