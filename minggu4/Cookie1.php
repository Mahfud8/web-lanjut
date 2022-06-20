<?php
$value = 'a71b';
$value2 = 'a71b Ghiyatsi';
setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600); 
/* expire in 1 hour */
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='cookie2.php'>di
sini</a> untuk pemeriksaan cookies</h2>";
?>


<?php
if(!empty($_POST['remember'])) {
  setcookie("username", "");
  setcookie("password",""); 
  echo "Cookie named 'user' is set!<br>";
  echo "Value is: " . $_POST['username'];
} 
else {
  setcookie("username", $_POST["username"], time() + 60);
  setcookie("password", $_POST["password"], time() + 60); 
  echo "Cookie named 'user' is set!<br>";
  echo "Value is: " . $_POST['username'];
}
?>

<html>
<head>
    <title>Cookie</title>
  </head>
  <body>
    <form action="" method ="Post">
      <label for="username">User Name :</label>
      <input type="text" id="username" name="username" value="<?php
      if(isset($_COOKIE["username"])) { 
        echo $_COOKIE["username"]; 
      } ?>" class="input-field"> <br>

      <label for="pwd">Password :</label>
      <input type="password" id="password" name="password" value="<?php 
      if(isset($_COOKIE["password"])) { 
        echo $_COOKIE["password"]; 
      } ?>" class="input-field"> <br><br>

      <input type="checkbox" name="remember">  
      <label for="remember"> Remember me</label><br><br>

      <input type="submit" name = "submit" value ="Submit">
      <input type="reset">
    </form>
  </body>
</html>