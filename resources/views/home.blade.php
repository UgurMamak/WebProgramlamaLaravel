@extends('layouts.app')
@section('Baslik','Dilek ve Şikayetler')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/KentimizCss.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dilek ve Şikayet</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                @foreach($Dilekler as $dilek)  
                <div  style="border: 1px #6699ff solid; ">
                   Ad Soyad:{{$dilek->AdSoyad}}<br>
                   Açıklama:{{$dilek->istek}}                                   
                </div>
                <div style="width:10px; height:10px;"></div>
                @endforeach    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
