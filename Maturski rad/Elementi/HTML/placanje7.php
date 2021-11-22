<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../CSS/placanje.css">
</head>
<body>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="../PHP/informacije7.php">
      
      <div class="row">
          <div class="col-50">
            <h3>Informacije</h3>
            <label for="fname"><i class="fa fa-user"></i> Puno ime</label>
            <input type="text" id="fname" name="PunoIme" placeholder="Amar Osmanović">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="Email" placeholder="amar@gmail.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Adresa</label>
            <input type="text" id="adr" name="Adresa" placeholder="Hrasnička 69">
            <label for="city"><i class="fa fa-institution"></i> Grad</label>
            <input type="text" id="city" name="Grad" placeholder="Sarajevo">

            <div class="row">
              <div class="col-50">
                <label for="state">Država</label>
                <input type="text" id="state" name="Drzava" placeholder="BiH">
              </div>
              <div class="col-50">
                <label for="zip">Pošta</label>
                <input type="number" id="zip" name="Posta" placeholder="71210">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Plaćanje</h3>
            <label for="fname">Moguće kartice</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Ime i prezime</label>
            <input type="text" id="cname" name="Vlasnik" placeholder="Amar Osmanović">
            <label for="ccnum">Broj kartice</label>
            <input type="number" id="ccnum" name="brKartice" placeholder="1111-2222-3333-4444">
            
            <div class="row">
              <div class="col-50">
                <label for="expyear">Datum isteka</label>
                <input type="date" id="expyear" name="Istek" placeholder="2021">
                <style>input[type=date] { width: 100%; margin-bottom: 20px; padding: 12px;border: 1px solid #ccc; border-radius: 3px;}
              </style>
              </div>
              <div class="col-50">
                <label for="cvv">Kod</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Adresa dostavljanja ista kao i adresa plaćanja
        </label>
        <input type="submit" value="Potvrdi plaćanje" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Takse i naknade</a> <span class="price">€13,72</span></p>
      <p><a href="#">Putno osiguranje</a> <span class="price">€11,41</span></p>
      <p><a href="#">All Risk Osiguranje od otkazivajna putovanja</a> <span class="price">€6,34</span></p>
      <p><a href="#">Cijena leta</a> <span class="price">€75</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>€106,47</b></span></p>
    </div>
  </div>
</div>

</body>
</html>
