<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Official Wizz Air website</title>
    <meta name="description" content="">
    <link rel="stylesheet" text="text/css" href="../CSS/Stranica3.css">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
   
  </head>
  <body>
    <header>
      <img class="logo" src="../Slike/logo.svg" alt="logo">
      <nav>
        <ul class="nav_linkovi">
          <li class="li1"><a class="a2" onclick="otvoriStranicu1()">Letovi</a></li>
          <li class="li1"><a class="a2" href="https://sp.booking.com/index.html?aid=349081&lang=en-gb&selected_currency=EUR&label=pagenavtab-link-349081-click&utm_source=wizz&utm_medium=referral&utm_campaign=homepage_navtab_link" target="_blank">Hoteli</a></li>
          <li><a class="a1" onclick="otvoriStranicu3()">O nama</a></li>
        </ul>
      </nav>
      <a class="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><button class="button1" onclick="promijeniDugme()"><span id="span1">Prijavi se</span></button></a>
      <div id="id01" class="modal">

        <form class="modal-content animate" action="../PHP/login.php" method="get">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="../Slike/img_avatar2.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Korisničko ime</b></label>
            <input type="text" name="Ime" placeholder="Unesite korisničko ime" name="uname" required>

            <label for="psw"><b>Šifra</b></label>
            <input type="password" name="Sifra" placeholder="Unesite šifru" name="psw" required>

            <button class="loginbtn"type="submit">Uloguj se</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Zapamti me
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



      <script type="text/javascript">
        function promijeniDugme(){
          document.getElementById("span1").innerHTML = "Odjavi se";
        }
      </script>


      <script>
        function otvoriStranicu1()
        { window.open("../../WizzAir.php","_self") }
      </script>
      <script>
        function otvoriStranicu3()
        { window.open("Stranica3.php","_self") }
      </script>
    
    </header>

  </body>
</html>
<p class="oKompanijii">Podaci o kompaniji</p>
<p class="oNama" id="naslov">Historijat</p>
<p class="oNama">
  Ideja o pokretanju aviokompanije Wizz Air se rodila juna 2003. godine kada se šest ljudi sa raznovrsnim i uspješnim iskustvom u avijaciji udružilo s Józsefom Váradijem, glavnim izvršnim direktorom kompanije. Za samo tri mjeseca kompanija Wizz Air je postala registrirana kompanija spremna za polijetanje.
</p>
<p class="oNama">Prvi let je imala 19. maja 2004. iz Katovica. Wizz Air danas nudi preko 600 linija s 25 baza u regionu: Beč u Austriji; Tuzla u Bosni i Hercegovini; Sofija i Varna u Bugarskoj, Kutaisi u Gruziji; Budimpešta i Debrecin u Mađarskoj; Riga u Latviji; Viljnus u Litvaniji; Skoplje u Sjevernoj Makedoniji; Kišnjev u Moldaviji; Katovice, Varšava, Gdanjsk, Poznan i Vroclav u Poljskoj; Bukurešt, Kluž-Napoka, Krajova, Jaši, Sibiu i Temišvar u Rumuniji; Beograd u Srbiji; London Luton u Ujedinjenom Kraljevstvu; Kijev u Ukrajini.</p>
<p class="oNama">Uslijedila je decenija izrastanja u najveću niskobudžetnu aviokompaniju u Srednjoj i Istočnoj Evropi. Kompanija Wizz Air je uspješno završila početnu javnu ponudu dionica 25. februara 2015. godine te je primljena na Londonsku berzu. Kompanija se sada nalazi na Londonskoj berzi (LSE) pod oznakom hartije od vrijednosti WIZZ i zapošljava više od 3000 osoba.</p>
<p class="oNama">Na 11. godišnjicu u maju 2015. godine, kompanija WIZZ je najavila potpuno podmlađivanje brenda i nove avione kao odgovor na razvoj potreba putnika, čime je zauzela mjesto među velikim aviokompanijama Evrope. Kompanija WIZZ je poprimila življi, svježiji i sofisticiraniji izgled i dojam. Neke od mnogih uvedenih inicijativa, pored inicijative za brendiranjem, su bile dodjela sjedišta, prioritet pri ukrcavanju, poboljšani sistem tarifa.</p>
<p class="oNama">Air Transport World, vodeći časopis u industriji, kompaniju Wizz Air je proglasio Najboljom niskobudžetnom aviokompanijom za 2016. godinu.</p>
<p class="oNama" >Prema rangiranju na web lokaciji <span class="oNama"id="underline">Airlineratings </span><span class="oNama"id="bold">Wizz Air je Najbolja niskobudžetna aviokompanija u Evropi za 2020. godinu!</span></p>




<!-- ###### FOOTER #####-->

<footer class="footer">
  <div class="container bottom_border">
  <div class="row">
  <div class=" col-sm-4 col-md col-sm-4  col-12 col">
  <h5 class="headin5_amrc col_white_amrc pt2">O nama</h5>
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
  <p class="text-center">Copyright @2021 | Designed With by <a href="https://www.instagram.com/amchiiio" target="_blank">Amar Osmanović</a></p>
  
  <ul class="social_footer_ul">
  <li><a href="https://www.facebook.com/wizzair" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
  <li><a href="https://twitter.com/wizzair" target="_blank"><i class="fab fa-twitter"></i></a></li>
  <li><a href="https://hu.linkedin.com/company/wizzair" target="_blank"><i class="fab fa-linkedin"></i></a></li>
  <li><a href="https://www.instagram.com/wizzair" target="_blank"><i class="fab fa-instagram"></i></a></li>
  </ul>
  <!--social_footer_ul ends here-->
  </div>
  
  </footer>
  
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>