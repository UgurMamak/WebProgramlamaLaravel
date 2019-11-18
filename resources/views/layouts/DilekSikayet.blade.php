@extends('layouts.app')
@section('Baslik','Dilek Şikayet')
@section('content')
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
                    Önerileriniz ve Şikayetlerini Bize İletin.

               <form action="" method="post">
                {{csrf_field()}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ad Soyad</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="TxtAdSoyad" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Dilek ve Şikayet</label>

                            <div class="col-md-6">
                               <textarea class="form-control @error('name') is-invalid @enderror" name="TxtDilek" value="{{ old('name') }}" required autocomplete="name" autofocus rows="4" cols="50"></textarea>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="BtnGonder">Gönder</button>
                            </div>
                        </div>

                </form>

                @if(isset($_POST['BtnGonder'])) 
                    <br>
                    <div class={{$kutu}}>{{$sonuc}}</div> 
                 @endif




                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
