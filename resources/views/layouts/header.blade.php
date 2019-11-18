<nav class="navbar navbar-expand-md navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Iğdır Belediyesi
                </a> 
                <div  id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                  
  
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ">
                        <!-- Authentication Links -->
                        @guest 
                             <li class="nav-item">
                                <a class="nav-link" href="{{URL::to('index')}}">AnaSayfa</a>
                            </li>  

                            <li class="nav-item">
                                <a class="nav-link" href="{{URL::to('DilekSikayet')}}">Dilek ve Şikayet</a>
                            </li>                     


                                                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Giriş Yap</a>
                            </li>


                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Üye Ol</a>
                                </li>
                            @endif
                        @else
                        
                          <li class="nav-item">
                                <a class="nav-link" href="{{URL::to('index')}}">AnaSayfa</a>
                            </li> 
                            <li>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> 
                                     <a class="dropdown-item" href="{{ route('Profil') }}">Kullanıcı Bilgileri</a>


                                    <!--Kullanıcı yapan admin ise gözükmesi gereken kod kısmı -->
                                    @if(Auth::user()->role_id=="1") 
                                    <a class="dropdown-item" href="{{ route('HesapListele') }}">Hesapları Listele</a>

                                   <a class="dropdown-item" href="{{ route('DuyuruEkleme') }}">Duyuru Ekle</a>

                                   <a class="dropdown-item" href="{{URL::to(' ')}}">Dilek ve Şikayetler</a>
                                    @endif

                                    <!--Kullanıcı yapan admin değilse ise gözükmesi gereken kod kısmı -->
                                    @if(Auth::user()->role_id=="2")
                                     <a class="dropdown-item" href="{{URL::to(' ')}}">Duyurular</a>
                                    @endif





 
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       Çıkış Yap
                                    </a>
                                    
                                



                                
 
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                  

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>