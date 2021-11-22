<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" text="text/css" href="LogInStranica.css">
  </head>
  <body>

<div class="login">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fa fa-user" aria-hidden="true"></i>
    <style media="screen">
      ::placeholder{
        color: 	#282828;
      }
    </style>
    <input type="text" placeholder="Korisničko ime" name="" value="">
      </div>
      <div class="textbox">
        <i class="fa fa-lock"aria-hidden="true" ></i>
        <input type="password" placeholder="Šifra" name="" value="">
          </div>
          <link rel="js" href="/css/master.css">

  <input class="login_dugme" type="button" name="" onclick="otvoriStranicu1()" value="Prijavi se">
  <script>
    function otvoriStranicu1()
    {  window.history.go(-1); }
  </script>
</div>
  </body>
</html>
