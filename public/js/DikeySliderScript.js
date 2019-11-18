// JavaScript Document
// JavaScript Document

	var aktif2=0;
	var pasif2=null;
	slider2();
	
	var ileri2=document.createElement('div');
	ileri2.style.right="0";
	ileri2.innerHTML=">";
	ileri2.className="ileri2";
	ileri2.onclick=function(){slider2();}
	
	
	var geri2=document.createElement("div");
	geri2.style.left="0";
	geri2.innerHTML="<";
	geri2.className="geri2";
	geri2.onclick=function(){ aktif2-=2; slider2();}
	
	
	var anadiv2=document.getElementById("second-slider");
	anadiv2.appendChild(ileri2);
	anadiv2.appendChild(geri2);
	
	
	anadiv2.onmouseover=function(){clearTimeout(slayt_zaman2);}
	anadiv2.onmouseout=function(){slayt_zaman2=setInterval(slider2,3000);}
	
	function slider2(){
	    
		if(aktif2>=document.getElementsByClassName("slayt2").length){ 
		aktif2=0;
		}else if(aktif2<0){ 
		aktif2=document.getElementsByClassName("slayt2").length-1; }
	if(pasif2!=null){
		
		var pasifdiv2=document.getElementsByClassName("slayt2")[pasif2];
		pasifdiv2.style.animation="hareket2 linear 1s";
		pasifdiv2.style.right="-700px";
		
		}
		
		for(var s2=0;s2<document.getElementsByTagName("li").length;s2++){
		    document.getElementsByTagName("li")[s2].setAttribute("class","");
		}
		
		var aktifdiv2=document.getElementsByClassName("slayt2")[aktif2];
		aktifdiv2.style.animation="hareket1 linear 1s";
		aktifdiv2.style.opacity="1";
		aktifdiv2.style.right="0px";
		var kutu2 = document.getElementById('slaytsirasi2');
    	kutu2.getElementsByTagName("li")[aktif2].setAttribute("class","aktifLi2");
    	
		
	pasif2=aktif2;
	aktif2++;
	}
		var slayt_zaman2=setInterval(slider2,3000);







