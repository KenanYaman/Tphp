<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
    </head>
    <body>
<?php
/*
Türkçe PHP - TPHP
Geliştirici:Bilal Onur Eskili
Geliştirilme Tarihi:06.09.2015
İletişim:boeskili@yahoo.com


*UTF-8 Karakter Seti ile Çalışmaktadır.
*/

function yaz($yazilacak){
    
echo $yazilacak;
    
}

function ip_yazdir(){
	
 
    echo $_SERVER['REMOTE_ADDR']; 
    
}

function tarih_yazdir(){
 
    echo date("d.m.Y");
    
}

function saat_yazdir(){
 
    echo date("G:i:s");
    
}

function tarih_saat_yazdir(){
    
 echo date("d.m.Y G:i:s");
    
}

function vucut_kitle_indeks($boy,$kg){
    
$vucut_agr = $kg;
$zayif = "18.5";
$orta = "24.9";
$orta_1 = "25";
$fazla = "29.9";
$fazla_1 = "30";
$obez = "40";
$boykare = $boy * $boy  ;
$vki =  $vucut_agr / $boykare;
echo "<p>Vücut Kitle İndeksiniz: ".$vki."</p>";
  if($vki < $zayif){
 echo "<span style='color:blue'>Çok Zayıfsınız.</span>";
 }elseif($vki > $zayif and $vki < $orta){ 
echo "<span style='color:green'>İdeal kilodasınız.<span style='green'>";
}elseif($vki > $orta_1 and $vki < $fazla){ 
echo "<span style='color:orange'>Fazla kilodasınız.</span>";
}elseif($vki > $fazla_1 and $vki < $obez){ 
echo "<span style='color:red'>Obezsiniz.</span>";
}elseif($vki > $obez){ 
echo "<span style='color:red'>Aşırı obez.</span>";
}
    
}

function sayi_yuvarla($sayi){
// http://sanalkurs.net/twitter-tarzi-sayi-yuvarlama-9723.html 
$sayi = $int;
			if ($int > 999999) {
				
				$int = number_format($int);
				return $int = floor($int)."M";

			}elseif($int > 1999) {

				$int = number_format($int);
				return $int = floor($int)."K";

			}else {

				return $int;

			}
    
}

function yazi_buyuk_1($yazi){
    
 echo "<h1>".$yazi."</h1>";
    
}

function yazi_buyuk_2($yazi){
    
 echo "<h2>".$yazi."</h2>";
    
}

function yazi_buyuk_3($yazi){
    
 echo "<h3>".$yazi."</h3>";
    
} 

function yazi_buyuk_4($yazi){
    
 echo "<h4>".$yazi."</h4>";
    
}

function yazi_buyuk_5($yazi){
    
 echo "<h5>".$yazi."</h5>";
    
}

function yazi_buyuk_6($yazi){
    
 echo "<h6>".$yazi."</h6>";
    
}

function link_yaz($link,$baslik){
 
    echo "<a href='".$link."'>".$baslik."</a>";
    
}

function resim($resim_linki){
    
 echo "<img src='".$resim_linki."'>";

    
}

function kod($hane_sayisi){
    // http://batuhankucukali.com/2012/09/php-ile-rasgele-kod-olusturmak-sayi-ve-harf/
    
        $karakterler = array(); // boş bir dizi oluşturuyoruz
        $karakterler = array_merge(range(0,9),range('a','z'),range('A','Z')); // range = belirtilen aralık arasında dizi oluşturur
        // array_merge = dizileri arka arkaya ekler
        srand((float)microtime()*100000); // belirli bir düzen içerisinde rastgele sayı üretir
        shuffle($karakterler); // dizideki elemanları rasgele sıralar
        $sonuc = ''; // boş bir sonuc değişkeni oluşturuyoruz
        for($i=0; $i<$uzunluk; $i++){
                $sonuc .= $karakterler[$i]; // karakterleri birleştirir
        }
        unset($karakterler); // tanımlanmamış hale getirir
        echo $sonuc; // çıkan sonucu ekrana yazdırır
}

function kalin_yaz($yazi){
    
 echo "<b>".$yazi."</b>";
    
}

function italik_yaz($yazi){
    
 echo "<i>".$yazi."</i>";
    
}

function kayan_yazi($yazi){
    
 echo "<marquee>".$yazi."</marquee>";
    
}  

function selam_ver($isim){
 
    echo "Merhaba <b>".$isim."</b> Hoşgeldin!";
    
}   

function sayinin_karesi($sayi){
    
  $sayinin_karesi = $sayi*$sayi ;
    echo $sayinin_karesi;
}

function sifrele($sifrelenecek){
    
 echo md5($sifrelenecek);   
    
}

function beyaz_yazi($yazi){
    
    echo "<span style='color:white;'>".$yazi."</span>";
    
}

function siyah_yazi($yazi){
    
    echo "<span style='color:black;'>".$yazi."</span>";
    
}

function sari_yazi($yazi){
    
    echo "<span style='color:yellow;'>".$yazi."</span>";
    
}

function kirmizi_yazi($yazi){
    
    echo "<span style='color:red;'>".$yazi."</span>";
    
}

function yesil_yazi($yazi){
    
    echo "<span style='color:green;'>".$yazi."</span>";
    
}

function turuncu_yazi($yazi){
    
    echo "<span style='color:orange;'>".$yazi."</span>";
    
}

function gri_yazi($yazi){
    
    echo "<span style='color:gray;'>".$yazi."</span>";
    
}

function mavi_yazi($yazi){
    
    echo "<span style='color:blue;'>".$yazi."</span>";
    


function ht_manset($yukseklik,$genislik){
    
    //HABERTÜRK MANŞET
    
 echo "<div style='width:620px;height:445px'><a href='http://www.haberturk.com
' target='_blank' title='Habertürk'><img height='35' src='http://www.haberturk.com/images/siteneekle/manset.png'></a><iframe scrolling='no' frameborder='0' width='".$genislik."' height='".$yukseklik."' src='http://www.haberturk.com/siteneekle/haberManset'></iframe></div>";   
    
} //HaberTürkManşet

function plaka_botu($il){
    
 if($il == "Adana" or $il == "adana"){
     
  echo "01";   
 }elseif($il == "adıyaman" or $il == "Adıyaman"){
     
     echo "02";
 }elseif($il == "afyon" or $il == "Afyon" or $il == "Afyonkarahisar" or $il == "afyonkarahisar"){
     
     echo "03";
 }elseif($il == "Ağrı" or $il == "ağrı"){
     
     echo "04";
 }elseif($il == "amasya" or $il == "Amasya"){
     
     echo "05";
 }elseif($il == "ankara" or $il == "Ankara"){
     
     echo "06";
 }elseif($il == "antalya" or $il == "Antalya"){
     
     echo "07";
 }elseif($il == "artvin" or $il == "Artvin"){
     
     echo "08";
 }elseif($il == "aydın" or $il == "Aydın"){
     
     echo "09";
 }elseif($il == "Balıkesir" or $il == "balıkesir"){
     
     echo "10";
 }elseif($il == "bilecik" or $il == "Bilecik"){
     
     echo "11";
 }elseif($il == "bingöl" or $il == "Bingöl"){
     
     echo "12";
 }elseif($il == "bitlis" or $il == "Bitlis"){
     
     echo "13";
 }elseif($il == "bolu" or $il == "Bolu"){
     
     echo "14";
 }elseif($il == "burdur" or $il == "Burdur"){
     
     echo "15";
 }elseif($il == "bursa" or $il == "Bursa"){
     
     echo "16";
 }elseif($il == "çanakkale" or $il == "Çanakkale"){
     
     echo "17";
 }elseif($il == "çankırı" or $il == "Çankırı"){
     
     echo "18";
 }elseif($il == "çorum" or $il == "Çorum"){
     
     echo "19";
 }elseif($il == "denizli" or $il == "Denizli"){
     
     echo "20";
 }elseif($il == "diyarbakır" or $il == "Diyarbakır"){
     
     echo "21";
 }elseif($il == "edirne" or $il == "Edirne"){
     
     echo "22";
 }elseif($il == "elazığ" or $il == "Elazığ"){
     
     echo "23";
 }elseif($il == "erzincan" or $il == "Erzincan"){
     
     echo "24";
 }elseif($il == "erzurum" or $il == "Erzurum"){
     
     echo "25";
 }elseif($il == "Eskişehir" or $il == "eskişehir"){
     
     echo "26";
 }elseif($il == "gaziantep" or $il == "Gaziantep" or $il == "antep" or $il == "Antep"){
     
     echo "27";
 }elseif($il == "giresun" or $il == "Giresun"){
     
     echo "28";
 }elseif($il == "gümüşhane" or $il == "Gümüşhane"){
     
     echo "29";
 }elseif($il == "hakkari" or $il == "Hakkari"){
     
     echo "30";
 }elseif($il == "hatay" or $il == "Hatay"){
     
     echo "31";
 }elseif($il == "ısparta" or $il == "Isparta"){
     
     echo "32";
 }elseif($il == "içel" or $il == "içel" or $il == "mersin" or $il == "Mersin"){
     
     echo "33";
 }elseif($il == "istanbul" or $il == "İstanbul"){
     
     echo "34";
 }elseif($il == "izmir" or $il == "İzmir"){
     
     echo "35";
 }elseif($il == "kars" or $il == "Kars"){
     
     echo "36";
 }elseif($il == "kastamonu" or $il == "Kastamonu"){
     
     echo "37";
 }elseif($il == "kayseri" or $il == "Kayseri"){
     
     echo "38";
 }elseif($il == "kırklareli" or $il == "Kırklareli"){
     
     echo "39";
 }elseif($il == "kırşehir" or $il == "Kırşehir"){
     
     echo "40";
 }elseif($il == "kocaeli" or $il == "Kocaeli"){
     
     echo "41";
 }elseif($il == "konya" or $il == "Konya"){
     
     echo "42";
 }elseif($il == "kütahya" or $il == "Kütahya"){
     
     echo "43";
 }elseif($il == "malatya" or $il == "Malatya"){
     
     echo "44";
 }elseif($il == "manisa" or $il == "Manisa"){
     
     echo "45";
 }elseif($il == "maraş" or $il == "Maraş" or $il == "kahramanmaraş" or $il == "Kahramanmaraş"){
     
     echo "46";
 }elseif($il == "mardin" or $il == "Mardin"){
     
     echo "47";
 }elseif($il == "muğla" or $il == "Muğla"){
     
     echo "48";
 }elseif($il == "muş" or $il == "Muş"){
     
     echo "49";
 }elseif($il == "nevşehir" or $il == "Nevşehir"){
     
     echo "50";
 }elseif($il == "niğde" or $il == "Niğde"){
     
     echo "51";
 }elseif($il == "ordu" or $il == "Ordu"){
     
     echo "52";
 }elseif($il == "rize" or $il == "Rize"){
     
     echo "53";
 }elseif($il == "sakarya" or $il == "Sakarya"){
     
     echo "54";
 }elseif($il == "samsun" or $il == "Samsun"){
     
     echo "55";
 }elseif($il == "siirt" or $il == "Siirt"){
     
     echo "56";
 }elseif($il == "sinop" or $il == "Sinop"){
     
     echo "57";
 }elseif($il == "sivas" or $il == "Sivas"){
     
     echo "58";
 }elseif($il == "tekirdağ" or $il == "Tekirdağ"){
     
     echo "59";
 }elseif($il == "tokat" or $il == "Tokat"){
     
     echo "60";
 }elseif($il == "trabzon" or $il == "Trabzon"){
     
     echo "61";
 }elseif($il == "tunceli" or $il == "Tunceli"){
     
     echo "62";
 }elseif($il == "şanlıurfa" or $il == "Şanlıurfa" or $il == "urfa" or $il == "Urfa"){
     
     echo "63";
 }elseif($il == "uşak" or $il == "Uşak"){
     
     echo "64";
 }elseif($il == "van" or $il == "Van"){
     
     echo "65";
 }elseif($il == "yozgat" or $il == "Yozgat"){
     
     echo "66";
 }elseif($il == "zonguldak" or $il == "Zonguldak"){
     
     echo "67";
 }elseif($il == "aksaray" or $il == "Aksaray"){
     
     echo "68";
 }elseif($il == "bayburt" or $il == "Bayburt"){
     
     echo "69";
 }elseif($il == "karaman" or $il == "Karaman"){
     
     echo "70";
 }elseif($il == "kırıkkale" or $il == "Kırıkkale"){
     
     echo "71";
 }elseif($il == "batman" or $il == "Batman"){
     
     echo "72";
 }elseif($il == "şırnak" or $il == "Şırnak"){
     
     echo "73";
 }elseif($il == "bartın" or $il == "Bartın"){
     
     echo "74";
 }elseif($il == "ardahan" or $il == "Ardahan"){
     
     echo "75";
 }elseif($il == "ığdır" or $il == "Iğdır"){
     
     echo "76";
 }elseif($il == "yalova" or $il == "Yalova"){
     
     echo "77";
 }elseif($il == "karabük" or $il == "Karabük"){
     
     echo "78";
 }elseif($il == "kilis" or $il == "Kilis"){
     
     echo "79";
 }elseif($il == "osmaniye" or $il == "Osmaniye"){
     
     echo "80";
 }elseif($il == "düzce" or $il == "Düzce"){
     
     echo "81";
 }
    
    
    
    
    
}

function ulke_baskentleri($ulke){
    
 if ($ulke == "türkiye" or $ulke == "Türkiye"){
  
     echo "Ankara";
     
 }elseif($ulke == "almanya" or $ulke == "Almanya"){
  
     echo "Berlin";
     
 }elseif($ulke == "avusturya" or $ulke == "Avusturya"){
  
     echo "Viyana";
     
 }elseif($ulke == "belçika" or $ulke == "Belçika"){
  
     echo "Brüksel";
     
 }elseif($ulke == "çek cumhuriyeti" or $ulke == "Çek Cumhuriyeti"){
  
     echo "Prag";
     
 }elseif($ulke == "danimarka" or $ulke == "Danimarka"){
  
     echo "Kopenhang";
     
 }elseif($ulke == "fransa" or $ulke == "Fransa"){
  
     echo "Paris";
     
 }elseif($ulke == "hollanda" or $ulke == "Hollanda"){
  
     echo "Amsterdam";
     
 }elseif($ulke == "ispanya" or $ulke == "İspanya"){
  
     echo "Madrid";
     
 }elseif($ulke == "isveç" or $ulke == "İsveç"){
  
     echo "Stockholm";
     
 }elseif($ulke == "isviçre" or $ulke == "İsviçre"){
  
     echo "Bern"; 
     
 }elseif($ulke == "italya" or $ulke == "İtalya"){
  
     echo "Roma";
     
 }elseif($ulke == "lüksemburg" or $ulke == "Lüksemburg"){
  
     echo "Lüksemburg";
     
 }elseif($ulke == "malta" or $ulke == "Malta"){
  
     echo "Valetta";
     
 }elseif($ulke == "norveç" or $ulke == "Norveç"){
  
     echo "Oslo";
     
 }elseif($ulke == "polonya" or $ulke == "Polonya"){
  
     echo "Varşova";
     
 }elseif($ulke == "portekiz" or $ulke == "Portekiz"){
  
     echo "Lizbon";
     
 }elseif($ulke == "amerika" or $ulke == "Amerika"){
  
     echo "Washington";
     
 }elseif($ulke == "ingiltere" or $ulke == "İngiltere"){
  
     echo "Londra";
     
 }elseif($ulke == "azerbaycan" or $ulke == "Azerbaycan"){
  
     echo "Bakü";
     
 }elseif($ulke == "kazakistan" or $ulke == "Kazakistan"){
  
     echo "Astana";
     
 }elseif($ulke == "özbekistan" or $ulke == "Özbekistan"){
  
     echo "Taşkent";
     
 }elseif($ulke == "pakistan" or $ulke == "Pakistan"){
  
     echo "İslamabad";
     
 }elseif($ulke == "türkmenistan" or $ulke == "Türkmenistan"){
  
     echo "Aşkabad";
     
 }
    
    
    
    
    
    
    
    
    
    
}







?>
    </body>
</html>
