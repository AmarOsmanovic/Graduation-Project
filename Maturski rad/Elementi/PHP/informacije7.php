<?php
$conn = mysqli_connect("localhost", "root", "", "placanje");           

if($conn === false){ 
    die("ERROR: Could not connect. " 
        . mysqli_connect_error()); 
}           

$Ime = $_REQUEST['PunoIme'];   
$Email = $_REQUEST['Email']; 
$Adresa =$_REQUEST['Adresa'];   
$Grad =$_REQUEST['Grad'];  
$Drzava =$_REQUEST['Drzava'];  
$Posta =$_REQUEST['Posta']; 
$Vlasnik_Kartice =$_REQUEST['Vlasnik'];
$Broj_Kartice =$_REQUEST['brKartice'];
$Istek_Kartice =$_REQUEST['Istek'];
$CVV =$_REQUEST['cvv'];


$sql = "INSERT INTO placanje7 VALUES ('$Ime',  
    '$Email','$Adresa','$Grad','$Drzava','$Posta','$Vlasnik_Kartice','$Broj_Kartice','$Istek_Kartice','$CVV')"; 
    


if(mysqli_query($conn, $sql)){ 
    echo "";  

     
} else{ 
    echo "ERROR $sql. " 
        . mysqli_error($conn); 
} 
mysqli_close($conn); 
?>

<html>
<img class="poruka" src="../Slike/poruka.jpg" alt="logo">
<input type="submit" value="Završi" class="btn" onclick="window.open('../../WizzAir.php','_self')">
<style>
body{
background-color: #dcdcdc;
font-family: "calibri";
}
h3{
  position: absolute;
  top: 220px;
  left: 400px;
  font:30px;
}

.poruka{
    position: absolute;
    height: 600px;
    width: auto;
    left: 147px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px -8px;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  position: absolute;
  top:535px;
}

.btn:hover {
  background-color: #45a049;
}
</style>

</html>