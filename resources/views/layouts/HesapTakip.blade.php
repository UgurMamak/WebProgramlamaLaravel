@extends('layouts.app')
@section('Baslik','Hesap Takip')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sisteme Kayıtlı Hesapları Listeler</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hesaplar
                    <form method="post" name="sec" action="{{ route('HesapListele') }}">
                        {{csrf_field()}}
                    <select  name="kisiler">
                      @foreach($Hesaplar as $hesap)
                      <option value={{$hesap->id}}>{{$hesap->name}} {{$hesap->surname}}</option>      
                       @endforeach 
                   </select>
                    <button type="submit" name="BtnSec" class="btn btn-primary">Hesap Seç</button> 
                    </form> 
                    @if(isset($_POST['BtnSec']))
                    <br>
                     <table border="1px" >
                            <tr style="font-weight:bold;">
                                <td>Ad</td>
                                <td>Soyad</td>
                                
                                <td>EMail</td>
                                <td>Telefon</td>
                                <td>Yetki</td>
                            </tr>
                             <tr>
                                <td>{{$ad}}</td>
                                <td>{{$soyad}}</td>                               
                                <td>{{$email}}</td>
                                <td>{{$telefon}}</td>
                                <td>{{$yetki}}</td>
                            </tr>
                        </table> 
                        <br>
                            <form method="post" name="listele" action="{{ route('HesapListele2') }}" >
                                 {{csrf_field()}}
                                <input type="radio" name="yetki" value="Kullanıcı"> Kullanıcı
                                <input type="radio" name="yetki" value="Admin"> Admin
                                <button type="submit" name="BtnYetkiGuncelle" class="btn btn-primary">Yetki Değiştir</button> 
                            </form>              
                    @endif        

                            @if(isset($_POST['BtnYetkiGuncelle']))
                            <br>
                    <div class={{$kutu}}>{{$sonuc}}</div> 
                            @endif      
                            
                        



                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

 