<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Official Wizz Air website</title>
    <meta name="description" content="">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" text="text/css" href="Elementi\CSS\Stranica1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
    <header>
      <img class="logo" src="Elementi\Slike\logo.svg" alt="logo">
      <nav>
        <ul class="nav_linkovi">
          <li class="li1"><a class="a1" onclick="otvoriStranicu1()">Letovi</a></li>
          <li class="li1"><a class="a2" href="https://sp.booking.com/index.html?aid=349081&lang=en-gb&selected_currency=EUR&label=pagenavtab-link-349081-click&utm_source=wizz&utm_medium=referral&utm_campaign=homepage_navtab_link" target="_blank">Hoteli</a></li>
          <li><a class="a2" onclick="otvoriStranicu3()">O nama</a></li>
        </ul>
      </nav>
      <a class="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><button class="button1" onclick="promijeniDugme()"><span id="span1">Prijavi se</span></button></a>
      <div id="id01" class="modal">

        <form class="modal-content animate" action="Elementi/PHP/login.php" method="get">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="Elementi\Slike\img_avatar2.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Korisničko ime</b></label>
            <input type="text" name="Ime" placeholder="Unesite korisničko ime"  required>

            <label for="psw"><b>Šifra</b></label>
            <input type="password" name="Sifra" placeholder="Unesite šifru"  required>

            <button class="loginbtn"type="submit">Uloguj se</button>
            <label>
              <input type="checkbox" checked="checked"> Zapamti me
            </label>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Odustani</button>
            <span class="psw">Zaboravili ste <a href="#">šifru?</a></span>
          </div>
        </form>
      </div>

      <script>
      // Get the modal
      var modal = document.getElementById('id01');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>




      <script type="text/javascript">
        function promijeniDugme(){
          document.getElementById("span1").innerHTML = "Odjavi se";
        }
      </script>

      <script>
        function otvoriStranicu1()
        { window.open("WizzAir.php","_self") }
      </script>
      <script>
        function otvoriStranicu3()
        { window.open("Elementi/HTML/Stranica3.php","_self") }
      </script>
      
    </header>
<div class="pozadinskaSlika">
  <img class="bahami" src="Elementi\Slike\ljeto.jpg" alt="">
</div>
<div class="naslov">
  <p id="naslov1">Jeftine avio karte, hoteli, automobili...<br></p>
<p id="naslov2">Vruće cijene za proljeće i ljeto :) Planirajte sada!</p>
</div>
<!-- PRVA LISTA LETOVA-->

<div id="lista1">


<!-- ############# LET BROJ 1 ############# -->

<div class="let">
  <div class="box">
    <div class="cijena"><b>105</b></div>
    <div class="euro"><i class="fas fa-euro-sign"></i></div>
    <div class="info">Cijena po 1 putniku. Jedan pravac</div>
    <button class="izaberite" type="button" name="button" onclick="window.open('Elementi/HTML/placanje1.php','_self')" >Izaberite</button>
    <div class="share"><i class="fas fa-share-alt"></i></div>
    <div class="share1">dijeli</div>
  </div>
  <div><img class="bihlogo" src="Elementi\Logo\bih.png" alt=""> </div>
  <div class="SJJ">SJJ</div>
  <div><img class="bar"src="Elementi\Slike\bar.png" alt=""></div>
  <div class="MMX">MMX</div>
  <div class="datum">11 mar (cet)</div>
  <div class="polazak">12:45</div>
  <div class="strelica">  <i class="fas fa-long-arrow-alt-right"></i></div>
  <div class="dolazak">15:05</div>
  <div class="sat"><i class="far fa-clock"> 2h 20min</i></div>
  <div class="presjedanje">Bez presjedanja</div>
  <div class="klasa">klasa: economy</div>
  <div class="hrana"><i class="fas fa-utensils"></i></div>
  <div class="pice"><i class="fas fa-coffee"></i></div>
  <div class="kofer"><i class="fas fa-suitcase-rolling"></i></div>

<ul id="prozor">
  <li id="LI">detalji
  <div class="sadrzaj">
    <h2 class="prozorNaslov">SJJ-MMX</h2>
    <p class="prozorSadrzaj"><br>
      <div class="pKofer"><i style="font-size: 17px;" class="fas fa-suitcase-rolling"></i> - Registrovani prtljag</div>
      <div class="pHrana"><i style="font-size: 17px;" class="fas fa-utensils"></i> - Hrana i piće</div>
      <div class="pPice"><i style="font-size: 17px;" class="fas fa-coffee"></i> - Užina/piće</div>
     </p>
  </div> </li>
</ul>
<p class="napomena">Cijena karte s aerodromskim taksama (bez servisne naknade: 29 EUR po putniku)</p>


</div>

<!-- ############# LET BROJ 2 ############# -->

<div class="let">
  <div class="box">
    <div class="cijena"><b>471</b></div>
    <div class="euro"><i class="fas fa-euro-sign"></i></div>
    <div class="info">Cijena po 1 putniku. Jedan pravac</div>
    <button class="izaberite" type="button" name="button"onclick="window.open('Elementi/HTML/placanje2.php','_self')">Izaberite</button>
    <div class="share"><i class="fas fa-share-alt"></i></div>
    <div class="share1">dijeli</div>

  </div>
  <div><img class="arablogo" src="Elementi\Logo\arab.png" alt=""> </div>
  <div class="JED">JED</div>
  <div><img class="bar"src="Elementi\Slike\bar.png" alt=""></div>
  <div class="SZX">SZX</div>
  <div class="datum">24 maj (pon)</div>
  <div class="polazak">06:30</div>
  <div class="strelica">  <i class="fas fa-long-arrow-alt-right"></i></div>
  <div class="dolazak">15:55</div>
  <div class="sat"><i class="far fa-clock"> 9h 25min</i></div>
  <div class="presjedanje">Bez presjedanja</div>
  <div class="klasa">klasa: prva</div>
  <div class="wifi"><i class="fas fa-wifi"></i></div>
  <div class="tv"><i class="fas fa-tv"></i></div>
  <div class="hrana"><i class="fas fa-utensils"></i></div>
  <div class="pice"><i class="fas fa-coffee"></i></div>
  <div class="kofer"><i class="fas fa-suitcase-rolling"></i></div>
  <ul id="prozor">
    <li id="LI">detalji
    <div class="sadrzaj">
      <h2 class="prozorNaslov">JED-SZX</h2>
      <p class="prozorSadrzaj"><br>
        <div class="pKofer"><i style="font-size: 17px;" class="fas fa-suitcase-rolling"></i> - Registrovani prtljag</div>
        <div class="pHrana"><i style="font-size: 17px;" class="fas fa-utensils"></i> - Hrana i piće</div>
        <div class="pPice"><i style="font-size: 17px;" class="fas fa-coffee"></i> - Užina/piće</div>
        <div class="pTv"><i style="font-size: 17px;" class="fas fa-tv"></i> - Mediji i zabava</div>
        <div class="pWifi"><i style="font-size: 17px;" class="fas fa-wifi"></i> - Wi-Fi u avionu</div>
       </p>
    </div> </li>
  </ul>
  <p class="napomena">Cijena karte s aerodromskim taksama (bez servisne naknade: 29 EUR po putniku)</p>


</div>

<!-- ############# LET BROJ 3 ############# -->

<div class="let">
  <div class="box">
    <div class="cijena"><b>147</b></div>
    <div class="euro"><i class="fas fa-euro-sign"></i></div>
    <div class="info">Cijena po 1 putniku. Jedan pravac</div>
    <button class="izaberite" type="button" name="button"onclick="window.open('Elementi/HTML/placanje3.php','_self')">Izaberite</button>
    <div class="share"><i class="fas fa-share-alt"></i></div>
    <div class="share1">dijeli</div>

  </div>
  <div><img class="srblogo" src="Elementi\Logo\srb.png" alt=""> </div>
  <div class="BEG">BEG</div>
  <div><img class="bar"src="Elementi\Slike\bar.png" alt=""></div>
  <div class="MMX">MOW</div>
  <div class="datum">02 jul (pet)</div>
  <div class="polazak">15:00</div>
  <div class="strelica">  <i class="fas fa-long-arrow-alt-right"></i></div>
  <div class="dolazak">19:35</div>
  <div class="sat"><i class="far fa-clock"> 4h 35min</i></div>
  <div class="presjedanje">Bez presjedanja</div>
  <div class="klasa">klasa: economy</div>
  <div class="hrana"><i class="fas fa-utensils"></i></div>
  <div class="pice"><i class="fas fa-coffee"></i></div>
  <div class="kofer"><i class="fas fa-suitcase-rolling"></i></div>
  <ul id="prozor">
    <li id="LI">detalji
    <div class="sadrzaj">
      <h2 class="prozorNaslov">BEG-MOW</h2>
      <p class="prozorSadrzaj"><br>
        <div class="pKofer"><i style="font-size: 17px;" class="fas fa-suitcase-rolling"></i> - Registrovani prtljag</div>
        <div class="pHrana"><i style="font-size: 17px;" class="fas fa-utensils"></i> - Hrana i piće</div>
        <div class="pPice"><i style="font-size: 17px;" class="fas fa-coffee"></i> - Užina/piće</div>

       </p>
    </div> </li>
  </ul>
  <p class="napomena">Cijena karte s aerodromskim taksama (bez servisne naknade: 29 EUR po putniku)</p>

</div>

<!-- ############# LET BROJ 4 ############# -->

<div class="let">
  <div class="box">
    <div class="cijena"><b>83</b></div>
    <div class="euro"><i class="fas fa-euro-sign"></i></div>
    <div class="info">Cijena po 1 putniku. Jedan pravac</div>
    <button class="izaberite" type="button" name="button"onclick="window.open('Elementi/HTML/placanje4.php','_self')">Izaberite</button>
    <div class="share"><i class="fas fa-share-alt"></i></div>
    <div class="share1">dijeli</div>

  </div>
  <div><img class="austrianlogo" src="Elementi\Logo\austrian.png" alt=""> </div>
  <div class="GRZ">GRZ</div>
  <div><img class="bar"src="Elementi\Slike\bar.png" alt=""></div>
  <div class="BCN">BCN</div>
  <div class="datum">16 mar (uto)</div>
  <div class="polazak">17:20</div>
  <div class="strelica">  <i class="fas fa-long-arrow-alt-right"></i></div>
  <div class="dolazak">21:10</div>
  <div class="sat"><i class="far fa-clock"> 3h 50min</i></div>
  <div class="presjedanje">Bez presjedanja</div>
  <div class="klasa">klasa: economy</div>
  <div class="hrana"><i class="fas fa-utensils"></i></div>
  <div class="kofer"><i class="fas fa-suitcase-rolling"></i></div>
  <ul id="prozor">
    <li id="LI">detalji
    <div class="sadrzaj">
      <h2 class="prozorNaslov">GRZ-BCN</h2>
      <p class="prozorSadrzaj"><br>
        <div class="pKofer"><i style="font-size: 17px;" class="fas fa-suitcase-rolling"></i> - Registrovani prtljag</div>
        <div class="pHrana"><i style="font-size: 17px;" class="fas fa-utensils"></i> - Hrana i piće</div>
       </p>
    </div> </li>
  </ul>
  <p class="napomena">Cijena karte s aerodromskim taksama (bez servisne naknade: 29 EUR po putniku)</p>


</div>

<!-- ############# LET BROJ 5 ############# -->

<div class="let">
  <div class="box">
    <div class="cijena"><b>710</b></div>
    <div class="euro"><i class="fas fa-euro-sign"></i></div>
    <div class="info">Cijena po 1 putniku. Jedan pravac</div>
    <button class="izaberite" type="button" name="button"onclick="window.open('Elementi/HTML/placanje5.php','_self')">Izaberite</button>
    <div class="share"><i class="fas fa-share-alt"></i></div>
    <div class="share1">dijeli</div>

  </div>
  <div><img class="dubailogo" src="Elementi\Logo\dubai.png" alt=""> </div>
  <div class="DXB">DXB</div>
  <div><img class="bar"src="Elementi\Slike\bar.png" alt=""></div>
  <div class="MUC">MUC</div>
  <div class="datum">30 apr (pet)</div>
  <div class="polazak">10:45</div>
  <div class="strelica"> <i class="fas fa-long-arrow-alt-right"></i></div>
  <div class="dolazak">19:40</div>
  <div class="sat"><i class="far fa-clock"> 8h 55min</i></div>
  <div class="presjedanje">Bez presjedanja</div>
  <div class="klasa">klasa: prva</div>
  <div class="wifi"><i class="fas fa-wifi"></i></div>
  <div class="tv"><i class="fas fa-tv"></i></div>
  <div class="hrana"><i class="fas fa-utensils"></i></div>
  <div class="pice"><i class="fas fa-coffee"></i></div>
  <div class="kofer"><i class="fas fa-suitcase-rolling"></i></div>
  <ul id="prozor">
    <li id="LI">detalji
    <div class="sadrzaj">
      <h2 class="prozorNaslov">DXB-MUC</h2>
      <p class="prozorSadrzaj"><br>
        <div class="pKofer"><i style="font-size: 17px;" class="fas fa-suitcase-rolling"></i> - Registrovani prtljag</div>
        <div class="pHrana"><i style="font-size: 17px;" class="fas fa-utensils"></i> - Hrana i piće</div>
        <div class="pPice"><i style="font-size: 17px;" class="fas fa-coffee"></i> - Užina/piće</div>
        <div class="pTv"><i style="font-size: 17px;" class="fas fa-tv"></i> - Mediji i zabava</div>
        <div class="pWifi"><i style="font-size: 17px;" class="fas fa-wifi"></i> - Wi-Fi u avionu</div>
       </p>
    </div> </li>
  </ul>
  <p class="napomena">Cijena karte s aerodromskim taksama (bez servisne naknade: 29 EUR po putniku)</p>


</div>

</div>

<!--######## DRUGA LISTA LETOVA ####################################################-->
<div id="lista2" hidden >


  <!-- ############# LET BROJ 6 ############# -->

  <div class="let">
    <div class="box">
      <div class="cijena"><b>215</b></div>
      <div class="euro"><i class="fas fa-euro-sign"></i></div>
      <div class="info">Cijena po 1 putniku. Jedan pravac</div>
      <button class="izaberite" type="button" name="button"onclick="window.open('Elementi/HTML/placanje6.php','_self')">Izaberite</button>
      <div class="share"><i class="fas fa-share-alt"></i></div>
      <div class="share1">dijeli</div>

    </div>
    <div><img class="qatlogo" src="Elementi\Logo\qat.png" alt=""> </div>
    <div class="DOH">DOH</div>
    <div><img class="bar"src="Elementi\Slike\bar.png" alt=""></div>
    <div class="ADF">ADF</div>
    <div class="datum">05 maj (sri)</div>
    <div class="polazak">16:55</div>
    <div class="strelica">  <i class="fas fa-long-arrow-alt-right"></i></div>
    <div class="dolazak">18:05</div>
    <div class="sat"><i class="far fa-clock"> 1h 10min</i></div>
    <div class="presjedanje">Bez presjedanja</div>
    <div class="klasa">klasa: business</div>
    <div class="tv"><i class="fas fa-tv"></i></div>
    <div class="hrana"><i class="fas fa-utensils"></i></div>
    <div class="pice"><i class="fas fa-coffee"></i></div>
    <div class="kofer"><i class="fas fa-suitcase-rolling"></i></div>
    <ul id="prozor">
      <li id="LI">detalji
      <div class="sadrzaj">
        <h2 class="prozorNaslov">DOH-ADF</h2>
        <p class="prozorSadrzaj"><br>
          <div class="pKofer"><i style="font-size: 17px;" class="fas fa-suitcase-rolling"></i> - Registrovani prtljag</div>
          <div class="pHrana"><i style="font-size: 17px;" class="fas fa-utensils"></i> - Hrana i piće</div>
          <div class="pPice"><i style="font-size: 17px;" class="fas fa-coffee"></i> - Užina/piće</div>
          <div class="pTv"><i style="font-size: 17px;" class="fas fa-tv"></i> - Mediji i zabava</div>
         </p>
      </div> </li>
    </ul>
    <p class="napomena">Cijena karte s aerodromskim taksama (bez servisne naknade: 29 EUR po putniku)</p>


  </div>

  <!-- ############# LET BROJ 7 ############# -->

  <div class="let">
    <div class="box">
      <div class="cijena"><b>75</b></div>
      <div class="euro"><i class="fas fa-euro-sign"></i></div>
      <div class="info">Cijena po 1 putniku. Jedan pravac</div>
      <button class="izaberite" type="button" name="button" onclick="window.open('Elementi/HTML/placanje7.php','_self')">Izaberite</button>
      <div class="share"><i class="fas fa-share-alt"></i></div>
      <div class="share1">dijeli</div>

    </div>
    <div><img class="wizzlogo" src="Elementi\Logo\wizz.png" alt=""> </div>
    <div class="ACH">ACH</div>
    <div><img class="bar"src="Elementi\Slike\bar.png" alt=""></div>
    <div class="VBY">VBY</div>
    <div class="datum">14 jul (sri)</div>
    <div class="polazak">12:30</div>
    <div class="strelica">  <i class="fas fa-long-arrow-alt-right"></i></div>
    <div class="dolazak">14:20</div>
    <div class="sat"><i class="far fa-clock"> 1h 50min</i></div>
    <div class="presjedanje">Bez presjedanja</div>
    <div class="klasa">klasa: economy</div>
    <div class="hrana"><i class="fas fa-utensils"></i></div>
    <div class="kofer"><i class="fas fa-suitcase-rolling"></i></div>
    <ul id="prozor">
      <li id="LI">detalji
      <div class="sadrzaj">
        <h2 class="prozorNaslov">ACH-VBY</h2>
        <p class="prozorSadrzaj"><br>
          <div class="pKofer"><i style="font-size: 17px;" class="fas fa-suitcase-rolling"></i> - Registrovani prtljag</div>
          <div class="pHrana"><i style="font-size: 17px;" class="fas fa-utensils"></i> - Hrana i piće</div>
         </p>
      </div> </li>
    </ul>
    <p class="napomena">Cijena karte s aerodromskim taksama (bez servisne naknade: 29 EUR po putniku)</p>


  </div>

  <!-- ############# LET BROJ 8 ############# -->

  <div class="let">
    <div class="box">
      <div class="cijena"><b>125</b></div>
      <div class="euro"><i class="fas fa-euro-sign"></i></div>
      <div class="info">Cijena po 1 putniku. Jedan pravac</div>
      <button class="izaberite" type="button" name="button"onclick="window.open('Elementi/HTML/placanje8.php','_self')">Izaberite</button>
      <div class="share"><i class="fas fa-share-alt"></i></div>
      <div class="share1">dijeli</div>


    </div>
    <div><img class="turlogo" src="Elementi\Logo\tur.png" alt=""> </div>
    <div class="IST">IST</div>
    <div><img class="bar"src="Elementi\Slike\bar.png" alt=""></div>
    <div class="GPA">GPA</div>
    <div class="datum">24 jun (cet)</div>
    <div class="polazak">16:50</div>
    <div class="strelica">  <i class="fas fa-long-arrow-alt-right"></i></div>
    <div class="dolazak">22:50</div>
    <div class="sat"><i class="far fa-clock"> 6h</i></div>
    <div class="presjedanje">Bez presjedanja</div>
    <div class="klasa">klasa: business</div>
    <div class="tv"><i class="fas fa-tv"></i></div>
    <div class="hrana"><i class="fas fa-utensils"></i></div>
    <div class="pice"><i class="fas fa-coffee"></i></div>
    <div class="kofer"><i class="fas fa-suitcase-rolling"></i></div>
    <ul id="prozor">
      <li id="LI">detalji
      <div class="sadrzaj">
        <h2 class="prozorNaslov">SJJ-MMX</h2>
        <p class="prozorSadrzaj"><br>
          <div class="pKofer"><i style="font-size: 17px;" class="fas fa-suitcase-rolling"></i> - Registrovani prtljag</div>
          <div class="pHrana"><i style="font-size: 17px;" class="fas fa-utensils"></i> - Hrana i piće</div>
          <div class="pPice"><i style="font-size: 17px;" class="fas fa-coffee"></i> - Užina/piće</div>
          <div class="pTv"><i style="font-size: 17px;" class="fas fa-tv"></i> - Mediji i zabava</div>
         </p>
      </div> </li>
    </ul>
<p class="napomena">Cijena karte s aerodromskim taksama (bez servisne naknade: 29 EUR po putniku)</p>

  </div>



</div>


<!-- ##### MIJENJANJE LISTE ##### -->

<div class="Stranice">
<ul class="sljedecaStranica">
  <a  href="#" class="prosla"> << Prošla </a>
  <a  href="#" class="sljedeca">  Sljedeća >> </a>
</ul>
</div>
<!-- ###### FOOTER #####-->
</body>
<footer class="footer">
  <div class="container bottom_border">
  <div class="row">
  <div class=" col-sm-4 col-md col-sm-4  col-12 col">
   <h5 class="headin5_amrc col_white_amrc pt2">Nađite nas</h5>
  <!--headin5_amrc-->
  <p class="mb10">Ideja o pokretanju aviokompanije Wizz Air se rodila juna 2003. godine kada se šest ljudi sa raznovrsnim i uspješnim iskustvom u avijaciji udružilo s Józsefom Váradijem, glavnim izvršnim direktorom kompanije. Za samo tri mjeseca kompanija Wizz Air je postala registrirana kompanija spremna za polijetanje.</p>
  <p><i class="fa fa-location-arrow"></i> Kőér street 2/A | Building B | H–1103 | Budapest, Hungary </p>
  <p><i class="fa fa-phone"></i>  +094 250436  </p>
  <p><i class="fa fa fa-envelope"></i> wizz.ads@ink-global.com  </p>
  
  


  </div>
  
  <div class="container">
  <ul class="foote_bottom_ul_amrc">
  <li><a href="#">Home</a></li>
  <li><a href="#">About</a></li>
  <li><a href="#">Services</a></li>
  <li><a href="#">Pricing</a></li>
  <li><a href="#">Blog</a></li>
  <li><a href="#">Contact</a></li>
  </ul>
  <!--foote_bottom_ul_amrc ends here-->
  <p class="text-center">Copyright @2021 | Designed With by <a href="https://www.instagram.com/Amchiiio" target="_blank">Amar Osmanović</a></p>
  
  <ul class="social_footer_ul">
  <li><a href="https://www.facebook.com/wizzair" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
  <li><a href="https://twitter.com/wizzair" target="_blank"><i class="fab fa-twitter"></i></a></li>
  <li><a href="https://hu.linkedin.com/company/wizzair" target="_blank"><i class="fab fa-linkedin"></i></a></li>
  <li><a href="https://www.instagram.com/wizzair/" target="_blank"><i class="fab fa-instagram"></i></a></li>
  </ul>
  <!--social_footer_ul ends here-->
  </div>
  
  </footer>
  
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>

<!--##### MIJENJANJE LISTE OGLASA #####-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script>
$(document).ready(function (){
  $(".sljedeca").toggle(
    function(){$("#lista1").css({"display": "none"}),$("#lista2").css({"display": "block"});},
    function(){$("#lista1").css({"display": "none"}),$("#lista2").css({"display": "block"});});
});
</script>

<script>
$(document).ready(function (){
  $(".prosla").toggle(
    function(){$("#lista2").css({"display": "none"}),$("#lista1").css({"display": "block"});},
    function(){$("#lista2").css({"display": "none"}),$("#lista1").css({"display": "block"});});
});
</script>



