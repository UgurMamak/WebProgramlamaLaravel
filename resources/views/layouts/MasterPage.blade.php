<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>@yield('Baslik','SiteBaşlığı')</title>
<link rel="stylesheet" type="text/css" href="/css/HeaderCss.css"/>
<link rel="stylesheet" type="text/css" href="/css/ContainerCss.css"/>
<link rel="stylesheet" type="text/css" href="/css/YataySliderCss.css"/>
<link rel="stylesheet" type="text/css" href="/css/DikeySliderCss.css"/>
</head> 
<body bgcolor="#b5d3ef">
<div id="header">
<div id="top-menu">
<ul>
<li><a href="{{URL::to('index')}}" title="AnaSayfa"> Anasayfa</a></li>
<li><a href="{{URL::to('BosSayfa')}}" title="Kentimiz"> Kentimiz</a></li>
<li><a href="{{URL::to('BosSayfa')}}" title="Mevzuat"> Mevzuat</a></li>
<li><a href="{{URL::to('BosSayfa')}}" title="Stratejik Plan"> Stratejik Plan</a></li>
<li><a href="{{URL::to('BosSayfa')}}" title="Alo Belediye"> Alo Belediye</a></li>
<li><a href="{{URL::to('BosSayfa')}}" title="Muhtarlar"> Muhtarlar</a></li>
<li><a href="{{URL::to('BosSayfa')}}" title="Turizm Rehberi"> Turizm Rehberi</a></li>
<li><a href="{{URL::to('BosSayfa')}}" title="E-Belediye"> E-Belediye</a></li>
<li><a href="{{URL::to('BosSayfa')}}" title="İletişim"> İletişim</a></li>
</ul>
</div> <!--end top-menu-->
<div id="header-image" align="center" ><img src="../../img/banner_1418294000.jpg" style="margin:auto" /></div>
</div> <!--end header-->
<div id="container">
<nav id="main-menu">
<ul class="sf-menu">
            <li><a href="" title="">Iğdır</a>
             <ul>
                    <li><a href="{{URL::to('BosSayfa')}}"title="">Ağrı Dağı</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Akar Sular Ve Göller</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Anıtlar ve Heykeller</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Tarihi Kümbetler</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Kervansaraylar</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Tarihi Kaleler</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Tarihi Mezarlar</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Tarihi Yapılar</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Tuz Mağaraları</a></li>
                </ul>
            </li> 
            <li><a href="" title="">Kurumsal</a>
                <ul>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Meclis Üyeleri</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Meclis Kararları</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}"title="">Encümen Üyeleri</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Komisyonlar</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Yönetim Şeması</a></li>
                </ul>
            </li>
            <li><a href="" title="">Birimler</a>
            <ul class="sub-menu">

                    <li><a href="{{URL::to('BosSayfa')}}" title="">Özel Kalem Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}"title="">Yazı İşleri Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Mali Hizmetler Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">İmar ve Şehircilik Bankanlığı</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Fen İşleri Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Bilgi İşlem Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Hukuk İşleri Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">İtfaiye Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Zabıta Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Destek Hizmetleri Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">İnsan Kaynakları ve Eğitim Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Kültür ve Sosyal İşler Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Park Bahçeler Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Temizlik İşleri Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Su ve Kanalizasyon Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Hal Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Veteriner İşleri Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Ulaştırma Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Emlak ve İstimlak Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Kadın ve Aile Hizmetleri Müdürlüğü</a></li>
                </ul>
            </li>
            <li><a href="" title="">Haberler</a>
            <ul>

                    <li><a href="{{URL::to('BosSayfa')}}" title="">Başkanlık</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">İmar ve Şehircilik Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Fen İşleri Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Park ve Bahçeler Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Su ve Kanalizasyon Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Temizlik İşleri Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Zabıta Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Ulaştırma Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">İtfaiye Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Mali Hizmetler Müdürlüğü</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">Faaliyet Raporları</a></li>
                    <li><a href="{{URL::to('BosSayfa')}}" title="">İnsan Kaynakları ve Eğitim Müdürlüğü</a></li>
                </ul>
            </li>
            <li><a href="{{URL::to(' ')}}" title="">Duyuru</a>

            <ul><li><a href="{{URL::to(' ')}}" title="">Duyurular</a></li></ul>
            </li>
            <li><a href="{{URL::to(' ')}}" title="RAPOR">GirişYap</a></li>
            <li><a href="{{URL::to('register')}}" title="RAPOR">ÜyeOl</a></li>
            <li><a href="{{URL::to('DilekSikayet')}}" title="RAPOR">Dilek ve Şikayet</a></li>
            
        </ul>
</nav> <!--end main-menu-->
@yield('icerik')
<div id="footer" class="clear">
<div class="div" id="div">
<h3 class="widget-title">Iğdır Belediyesi</h3>
<div class="textwidget">
<p>Bağlar Mahallesi. Atatürk Caddesi. No.1</p>
<p>0476 227 6553-54</p>
<p>bilgiedinme@igdir.bel.tr</p>
</div>
</div>
<div class="div" id="div2">
<h3 class="widget-title">Sosyal Medya</h3>
<button id="begen"><img src="/img/lH1ibRl5GKq.png"/>Beğen</button>
<button id="tweet"><img src="/img/lH1ibRl5GKq.png"/>Tweetle</button>
</div>
<div class="div" id="div3">
<h3 class="widget-title">Bizi Takip Edin</h3>
<div >
<a href="" title="Twitter Takip" rel="external"><img src="/img/twitter.png" alt="twitter" class="fleft" /></a>
</div>
<div>
<a href="" title="facebook Takip" rel="external"><img src="/img/facebook.png" alt="facebook" class="fleft" /></a>
</div>
</div>
<div id="enalt">© Copyright 2014 </div>
<div id="top-back"><a href="#top">Yukarı</a></div>
</div> <!--end footer-->
</div> <!--end container-->

</body>
</html>

