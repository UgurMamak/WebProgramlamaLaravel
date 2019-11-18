@extends('layouts.app')
@section('Baslik','Duyurular')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/KentimizCss.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Duyurular</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif         

                <!--her duyuru için kutuların olması için foreachi divlerin dışında tanımladım-->          
                @foreach($Duyurular as $duyuru)
                <div class="kentkutu">
                    <button style="color:red;" class="accordion"onclick="openPanel(event, 'nufus')">{{$duyuru->Baslik}}
                    </button>
                    <div id="nufus" class="panel">
                    <p style="color: #777;"></p>
                    {{$duyuru->Aciklama}} 
                    </div>                   
                </div>

                <div style="width:10px;height:10px"></div>
                @endforeach   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
